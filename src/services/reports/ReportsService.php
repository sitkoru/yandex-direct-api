<?php

namespace directapi\services\reports;

use directapi\DirectApiService;
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
use Psr\Http\Message\RequestInterface;

class ReportsService extends BaseService
{
    public const REPORTS_API_URL = 'reports';

    /**
     * @param array $entities
     *
     * @return array
     *
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
        throw new \ErrorException('Not implemented');
    }

    /**
     * @param ReportDefinition                $reportDefinition
     * @param ReportProcessingModeEnum|string $mode
     * @param string                          $returnMoneyInMicros
     *
     * @return Report
     *
     * @throws DirectApiException
     * @throws ReportParserException
     * @throws ReportUnknownResponseCodeException
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonMapper_Exception
     */
    public function getReport(
        ReportDefinition $reportDefinition,
        $mode = ReportProcessingModeEnum::AUTO,
        $returnMoneyInMicros = 'false'
    ): Report {
        return $this->getReportResponse($this->getRequestJson($reportDefinition), $mode, $returnMoneyInMicros);
    }

    /**
     * @param string                   $payload
     * @param ReportProcessingModeEnum $mode
     * @param string                   $returnMoneyInMicros
     *
     * @return Report
     *
     * @throws DirectApiException
     * @throws ReportParserException
     * @throws ReportUnknownResponseCodeException
     * @throws \JsonMapper_Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getReportResponse($payload, $mode, $returnMoneyInMicros): Report
    {
        $request = $this->service->getRequest(BaseService::getApiUrl($this->useSandbox) . self::REPORTS_API_URL)
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
                            $this->service->logger->debug('Error 500. Retry');
                            $result = $this->getResult(0, $request);
                        } catch (BadResponseException $ex) {
                            $this->badResponseExceptionAnswer($ex);
                        }
                    } else {
                        $this->service->logger->debug('Error ' . $errorCode . '. Retry');
                        throw new DirectApiException($ex->getMessage(), $ex->getCode());
                    }
                } else {
                    throw new DirectApiException($ex->getMessage(), $ex->getCode());
                }
            } catch (BadResponseException $ex) {
                $this->badResponseExceptionAnswer($ex);
            }
            $code = $result->getStatusCode();
            if ($code === 201 || $code === 202) {
                //wait
                $header = $result->getHeader('retryIn');
                $retryIn = $header ? (int)$header[0] : 5;
                $this->service->logger->debug("Response: {$code}. Retry in: {$retryIn}");
                if ($retryIn > 0) {
                    sleep($retryIn);
                }
            } elseif ($code !== 200) {
                throw new ReportUnknownResponseCodeException($code);
            }
        }

        $this->service->logger->debug('Report done. Parse');
        $body = $result->getBody()->getContents();
        return $this->parseReportResponse($body);
    }

    /**
     * @param $attemptNumber
     * @param $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws DirectApiException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    private function getResult(int $attemptNumber, RequestInterface $request): \Psr\Http\Message\ResponseInterface
    {
        if ($attemptNumber < 100) {
            $result = $this->service->doRequest($request);
            if ($result === null) {
                sleep(1);
                $this->getResult($attemptNumber + 1, $request);
            }
            return $result;
        }
        throw new DirectApiException('Не удалось получить отчёт после 100 попыток');
    }

    /**
     * @param BadResponseException $ex
     *
     * @throws ReportParserException
     */
    private function badResponseExceptionAnswer(BadResponseException $ex): void
    {
        $code = $ex->getCode();
        $response = $ex->getResponse();
        if ($response === null) {
            return;
        }
        $errorBody = $response->getBody()->getContents();

        try {
            [$requestId, $errorCode, $errorMessage, $errorDetail] = $this->parseApiError($errorBody);
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
            throw new ReportParserException(0, $code, $e->getMessage(), $errorBody, $e);
        }
    }

    private function parseApiError(string $errorString): array
    {
        $errorJson = json_decode($errorString);
        $requestId = (string)$errorJson->request_id;
        $errorCode = (int)$errorJson->error_code;
        $errorMessage = (string)$errorJson->error_string;
        $errorDetail = (string)$errorJson->error_detail;

        return [$requestId, $errorCode, $errorMessage, $errorDetail];
    }

    /**
     * @param $body
     *
     * @return Report
     *
     * @throws \JsonMapper_Exception
     */
    private function parseReportResponse(string $body): Report
    {
        $bodyRows = explode("\n", $body);
        $firstRow = trim(array_shift($bodyRows), '"');
        $secondRow = array_shift($bodyRows);
        preg_match('/(.*)\s\(([0-9\-]+) - ([0-9\-]+)\)/', $firstRow, $matches);
        $reportName = 'n/a';
        $dateStart = 'n/a';
        $dateEnd = 'n/a';
        if ($matches) {
            [,$reportName, $dateStart, $dateEnd] = $matches;
        }
        $names = explode("\t", trim($secondRow, '"'));
        $report = new Report($reportName, $dateStart, $dateEnd, $names);
        $mapper = $this->service->getMapper();
        foreach ($bodyRows as $rowLine) {
            $columns = explode("\t", trim($rowLine, '"'));
            if (\count($columns) !== \count($names)) {
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

    public function getRequestJson(ReportDefinition $reportDefinition): string
    {
        $jsonRequest = ['params' => $reportDefinition];
        return json_encode($jsonRequest);
    }

    protected function getName(): string
    {
        return 'reports';
    }
}
