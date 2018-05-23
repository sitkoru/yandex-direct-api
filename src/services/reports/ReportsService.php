<?php

namespace directapi\services\reports;


use directapi\exceptions\DirectApiException;
use directapi\services\BaseService;
use directapi\services\reports\enum\ReportProcessingModeEnum;
use directapi\services\reports\exceptions\ReportBadRequestException;
use directapi\services\reports\exceptions\ReportParserException;
use directapi\services\reports\exceptions\ReportRequestTimeoutException;
use directapi\services\reports\exceptions\ReportServerErrorException;
use directapi\services\reports\exceptions\ReportUnknownResponseCodeException;
use directapi\services\reports\models\Report;
use directapi\services\reports\models\ReportDefinition;
use directapi\services\reports\models\ReportRow;
use GuzzleHttp\Exception\BadResponseException;
use SimpleXMLElement;

class ReportsService extends BaseService
{
    const REPORTS_API_URL = 'https://api.direct.yandex.com/json/v5/reports';

    /**
     * @param $body
     * @return Report
     */
    private function parseReportResponse($body)
    {
        $bodyRows = explode(PHP_EOL, $body);
        $firstRow = trim(array_shift($bodyRows), '"');
        $secondRow = array_shift($bodyRows);
        preg_match('/(.*)\s\(([0-9\-]+) - ([0-9\-]+)\)/', $firstRow, $matches);
        $reportName = 'n/a';
        $dateStart = 'n/a';
        $dateEnd = 'n/a';
        if ($matches) {
            list($reportName, $dateStart, $dateEnd) = $matches;
        }
        $names = explode("\t", trim($secondRow, '"'));
        $report = new Report($reportName, $dateStart, $dateEnd, $names);
        $mapper = $this->service->getMapper();
        foreach ($bodyRows as $rowLine) {

            $columns = explode("\t", trim($rowLine, '"'));
            if (count($columns) !== count($names)) {
                continue;
            }
            $rowData = new \stdClass();
            foreach ($columns as $k => $column) {
                $columnName = $names[$k];
                $rowData->$columnName = $column;
            }

            $row = new ReportRow();
            $mapper->map($rowData, $row);
            $report->addRow($row);
        }
        return $report;
    }

    protected function getName()
    {
        return 'reports';
    }

    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }

    /**
     * @param ReportDefinition                $reportDefinition
     * @param ReportProcessingModeEnum|string $mode
     * @param string                          $returnMoneyInMicros
     * @return Report
     * @throws \directapi\services\reports\exceptions\ReportUnknownResponseCodeException
     * @throws \directapi\services\reports\exceptions\ReportServerErrorException
     * @throws \directapi\services\reports\exceptions\ReportRequestTimeoutException
     * @throws \directapi\services\reports\exceptions\ReportBadRequestException
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function getReport(
        ReportDefinition $reportDefinition,
        $mode = ReportProcessingModeEnum::AUTO,
        $returnMoneyInMicros = 'false'
    ) {
        return $this->getReportResponse($this->getRequesJson($reportDefinition), $mode, $returnMoneyInMicros);
    }

    public function getRequesJson(ReportDefinition $reportDefinition)
    {
        $jsonRequest = ["params" => $reportDefinition];
        return json_encode($jsonRequest);
    }

    private function badResponseExceptionAnswer($ex)
    {
        $code = $ex->getCode();
        $errorBody = $ex->getResponse()->getBody()->getContents();

        try {
            list($requestId, $errorCode, $errorMessage, $errorDetail) = $this->parseApiError($errorBody);
            switch ($code) {
                case 400:
                    throw new ReportBadRequestException($requestId, $errorCode, $errorMessage, $errorDetail);
                    break;
                case 500:
                    throw new ReportServerErrorException($requestId, $errorCode, $errorMessage, $errorDetail);
                    break;
                case 502:
                    throw new ReportRequestTimeoutException($requestId, $errorCode, $errorMessage, $errorDetail);
                    break;
            }
        } catch (\Throwable $e) {
            throw new ReportParserException(0, $code, $e->getMessage(), $errorBody);
        }
    }

    /**
     * @param string                   $payload
     * @param ReportProcessingModeEnum $mode
     * @param string                   $returnMoneyInMicros
     * @return Report
     * @throws \directapi\services\reports\exceptions\ReportUnknownResponseCodeException
     * @throws \directapi\services\reports\exceptions\ReportRequestTimeoutException
     * @throws \directapi\services\reports\exceptions\ReportServerErrorException
     * @throws \directapi\services\reports\exceptions\ReportBadRequestException
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * @throws ReportParserException
     */
    public function getReportResponse($payload, $mode, $returnMoneyInMicros)
    {
        $request = $this->service->getRequest(self::REPORTS_API_URL)
            ->withAddedHeader('processingMode', $mode)
            ->withAddedHeader('returnMoneyInMicros', $returnMoneyInMicros)
            ->withBody(\GuzzleHttp\Psr7\stream_for($payload));

        $code = 0;
        $result = null;
        while ($code !== 200) {
            try {
                $result = $this->getResult(0, $request);
            } catch (DirectApiException $ex) {
                if ($ex->response) {
                    $exResp = json_decode($ex->response, true);
                    $errorCode = (int)$exResp['error']['error_code'];
                    if ($errorCode === 500) {
                        try {
                            $result = $this->getResult(0, $request);
                        } catch (BadResponseException $ex) {
                            $this->badResponseExceptionAnswer($ex);
                        }
                    } else {
                        $this->badResponseExceptionAnswer($ex);
                    }
                } else {
                    $this->badResponseExceptionAnswer($ex);
                }
            } catch (BadResponseException $ex) {
                $this->badResponseExceptionAnswer($ex);
            }
            $code = $result->getStatusCode();
            if ($code === 201 || $code === 202) {
                //wait
                $header = $result->getHeader('retryIn');
                $retryIn = $header ? (int)$header[0] : 5;
                if ($retryIn > 0) {
                    sleep($retryIn);
                }
            } elseif ($code !== 200) {
                throw new ReportUnknownResponseCodeException($code);
            }
        }

        $body = $result->getBody()->getContents();

        return $this->parseReportResponse($body);
    }

    /**
     * @param $attemptNumber
     * @param $request
     * @return \Psr\Http\Message\ResponseInterface
     * @throws DirectApiException
     */
    private function getResult($attemptNumber, $request)
    {
        while ($attemptNumber < 100) {
            $result = $this->service->doRequest($request);
            if ($result === null) {
                sleep(1);
                $this->getResult($attemptNumber + 1, $request);
            }
            return $result;
        }
        throw new DirectApiException('Не удалось получить отчёт после 100 попыток');
    }

    private function parseApiError($errorString)
    {
        $errorJson = json_decode($errorString);
        $requestId = (string)$errorJson->request_id;
        $errorCode = (int)$errorJson->error_code;
        $errorMessage = (string)$errorJson->error_string;
        $errorDetail = (string)$errorJson->error_detail;

        return [$requestId, $errorCode, $errorMessage, $errorDetail];
    }
}