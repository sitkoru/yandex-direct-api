<?php

namespace directapi\services\reports;


use directapi\services\BaseService;
use directapi\services\reports\enum\ReportProcessingModeEnum;
use directapi\services\reports\exceptions\ReportBadRequestException;
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
    const REPORTS_API_URL = 'https://api.direct.yandex.com/v5/reports';

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
        return $this->getReportResponse($this->getRequestXml($reportDefinition), $mode, $returnMoneyInMicros);
    }

    private function getRequestXml(ReportDefinition $reportDefinition)
    {
        $writer = new \XMLWriter();
        $writer->openMemory();
        $writer->startDocument('1.0', 'UTF-8');
        $writer->startElementNS(null, 'ReportDefinition', 'http://api.direct.yandex.com/v5/reports');
        //start SelectionCriteria
        $writer->startElement('SelectionCriteria');
        if ($reportDefinition->selectionCriteria->dateFrom) {
            $writer->writeElement('DateFrom', $reportDefinition->selectionCriteria->dateFrom);
        }
        if ($reportDefinition->selectionCriteria->dateTo) {
            $writer->writeElement('DateTo', $reportDefinition->selectionCriteria->dateTo);
        }
        foreach ($reportDefinition->selectionCriteria->getFilters() as $filter) {
            $writer->startElement('Filter');
            $writer->writeElement('Field', $filter->field);
            $writer->writeElement('Operator', $filter->operator);
            foreach ($filter->values as $value) {
                $writer->writeElement('Values', $value);
            }
            $writer->endElement();
        }
        $writer->endElement();
        //end SelectionCriteria
        foreach ($reportDefinition->fieldNames as $fieldName) {
            $writer->writeElement('FieldNames', $fieldName);
        }
        if ($reportDefinition->getPage()) {
            $writer->startElement('Page');
            $writer->writeElement('Limit', $reportDefinition->getPage()->limit);
            $writer->endElement();
        }
        foreach ($reportDefinition->getOrderBy() as $orderBy) {
            $writer->startElement('OrderBy');
            $writer->writeElement('Field', $orderBy->field);
            if ($orderBy->sortOrder) {
                $writer->writeElement('SortOrder', $orderBy->sortOrder);
            }
            $writer->endElement();
        }
        $writer->writeElement('ReportName', $reportDefinition->reportName);
        $writer->writeElement('ReportType', $reportDefinition->reportType);
        $writer->writeElement('DateRangeType', $reportDefinition->dateRangeType);
        $writer->writeElement('Format', $reportDefinition->format);
        $writer->writeElement('IncludeVAT', $reportDefinition->includeVAT);
        $writer->writeElement('IncludeDiscount', $reportDefinition->includeDiscount);
        $writer->endElement();
        $writer->endDocument();
        return $writer->outputMemory();
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
                $result = $this->service->doRequest($request);
            } catch (BadResponseException $ex) {
                $code = $ex->getCode();
                $errorBody = $ex->getResponse()->getBody()->getContents();
                list($requestId, $errorCode, $errorMessage, $errorDetail) = $this->parseApiError($errorBody);
                $errorMessage .= $errorMessage.PHP_EOL.' XML:'.$payload;
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

    private function parseApiError($xml)
    {
        $simpleXml = new SimpleXMLElement($xml);
        $simpleXml->registerXPathNamespace('reports', 'http://api.direct.yandex.com/v5/reports');
        $error = $simpleXml->xpath('//reports:ApiError')[0];
        $requestId = (string)$error->xpath('//reports:requestId')[0];
        $errorCode = (int)$error->xpath('//reports:errorCode')[0];
        $errorMessage = (string)$error->xpath('//reports:errorMessage')[0];
        $errorDetail = (string)$error->xpath('//reports:errorDetail')[0];

        return [$requestId, $errorCode, $errorMessage, $errorDetail];
    }
}