<?php

namespace directapi\services\reports\models;


use directapi\services\reports\enum\ReportFieldsEnum;

class Report
{
    /**
     * @var string Название отчёта
     */
    public $reportName;

    /**
     * @var string Дата начала
     */
    public $dateFrom;
    /**
     * @var string Дата окончания
     */
    public $dateTo;
    /**
     * @var ReportFieldsEnum[] Наименования полей (столбцов)
     */
    public $fieldNames;

    /**
     * @var ReportRow[] Данные
     */
    public $rows = [];

    public function __construct($reportName, $dateFrom, $dateTo, $fieldNames)
    {
        $this->reportName = $reportName;
        $this->dateFrom = $dateFrom;
        $this->dateTo = $dateTo;
        $this->fieldNames = $fieldNames;
    }

    public function addRow(ReportRow $row)
    {
        $this->rows[] = $row;
    }
}