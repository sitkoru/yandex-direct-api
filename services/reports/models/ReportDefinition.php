<?php

namespace directapi\services\reports\models;


use directapi\common\enum\YesNoEnum;
use directapi\services\reports\enum\ReportDateRangeTypeEnum;
use directapi\services\reports\enum\ReportFieldsEnum;
use directapi\services\reports\enum\ReportFormatsEnum;
use directapi\services\reports\enum\ReportTypesEnum;

class ReportDefinition
{
    /**
     * @var ReportSelectionCriteria Критерии отбора данных для отчета
     */
    public $selectionCriteria;

    /**
     * @var ReportFieldsEnum[] Имена полей (столбцов), которые будут присутствовать в отчете.
     */
    public $fieldNames = [];

    /**
     * @var ReportPage Ограничение на количество строк в отчете. Если не задано, используется ограничение 1 000 000.
     */
    public $page;

    /**
     * @var ReportOrderBy[]
     */
    public $order = [];

    /**
     * @var string Название отчета. Выводится в первой строке отчета.
     * В режиме офлайн название отчета должно быть уникальным для рекламодателя.
     * Если отчет с таким названием, но с отличающимися параметрами уже сформирован или находится в очереди,
     * выдается ошибка.
     */
    public $reportName;

    /**
     * @var ReportTypesEnum Тип отчета
     */
    public $reportType;

    /**
     * @var ReportDateRangeTypeEnum Период, за который формируется отчет
     */
    public $dateRangeType;

    /**
     * @var ReportFormatsEnum Формат отчета. В настоящее время поддерживается только значение TSV.
     */
    public $format;

    /**
     * @var YesNoEnum Включать ли НДС в денежные суммы в отчете.
     * Если рекламодатель работает в у. е. Директа, допускается только значение YES.
     */
    public $includeVAT;

    /**
     * Учитывать ли скидку для денежных сумм в отчете.
     * Если рекламодатель работает в у. е. Директа, допускается только значение NO.
     */
    public $includeDiscount;

    /**
     * ReportDefinition constructor.
     * @param ReportSelectionCriteria        $selectionCriteria
     * @param array                          $fieldNames
     * @param string                         $reportName
     * @param ReportTypesEnum|string         $reportType
     * @param ReportDateRangeTypeEnum|string $dateRangeType
     * @param ReportFormatsEnum|string       $format
     * @param YesNoEnum|string               $includeVAT
     * @param YesNoEnum|string               $includeDiscount
     */
    public function __construct(
        ReportSelectionCriteria $selectionCriteria,
        array $fieldNames,
        $reportName,
        $reportType,
        $dateRangeType,
        $format,
        $includeVAT,
        $includeDiscount
    ) {
        $this->selectionCriteria = $selectionCriteria;
        $this->fieldNames = $fieldNames;
        $this->reportName = $reportName;
        $this->reportType = $reportType;
        $this->dateRangeType = $dateRangeType;
        $this->format = $format;
        $this->includeVAT = $includeVAT;
        $this->includeDiscount = $includeDiscount;
    }
}