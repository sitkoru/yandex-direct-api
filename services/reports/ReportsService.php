<?php

namespace directapi\services\reports;


use directapi\services\BaseService;
use directapi\services\reports\enum\ReportProcessingModeEnum;
use directapi\services\reports\models\ReportDefinition;

class ReportsService extends BaseService
{

    protected function getName()
    {
        return 'reports';
    }

    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }

    /**
     * @param ReportDefinition         $reportDefinition
     * @param ReportProcessingModeEnum $mode
     * @param string                   $returnMoneyInMicros
     */
    public function getReport(
        ReportDefinition $reportDefinition,
        $mode = ReportProcessingModeEnum::AUTO,
        $returnMoneyInMicros = 'false'
    ) {
        $this->callReports($this->getRequestXml($reportDefinition), $mode, $returnMoneyInMicros);
    }

    private function getRequestXml(ReportDefinition $reportDefinition)
    {
        $writer = new \XMLWriter();
        $writer->startDocument('1.0', 'UTF-8');
        $writer->startElementNS('', 'ReportDefinition', 'http://api.direct.yandex.com/v5/reports');
        //start SelectionCriteria
        $writer->startElement('SelectionCriteria');
        if ($reportDefinition->selectionCriteria->dateFrom) {
            $writer->writeElement('DateFrom', $reportDefinition->selectionCriteria->dateFrom);
        }
        if ($reportDefinition->selectionCriteria->dateTo) {
            $writer->writeElement('DateTo', $reportDefinition->selectionCriteria->dateTo);
        }
        foreach ($reportDefinition->selectionCriteria->filters as $filter) {
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
        if ($reportDefinition->page) {
            $writer->startElement('Page');
            $writer->writeElement('Limit', $reportDefinition->page->limit);
            $writer->endElement();
        }
        foreach ($reportDefinition->order as $orderBy) {
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
}