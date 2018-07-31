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
    public $SelectionCriteria;

    /**
     * @var ReportFieldsEnum[] Имена полей (столбцов), которые будут присутствовать в отчете.
     */
    public $FieldNames = [];
    /**
     * @var string Название отчета. Выводится в первой строке отчета.
     * В режиме офлайн название отчета должно быть уникальным для рекламодателя.
     * Если отчет с таким названием, но с отличающимися параметрами уже сформирован или находится в очереди,
     * выдается ошибка.
     */
    public $ReportName;
    /**
     * @var ReportTypesEnum Тип отчета
     */
    public $ReportType;
    /**
     * @var ReportDateRangeTypeEnum Период, за который формируется отчет
     */
    public $DateRangeType;
    /**
     * @var ReportFormatsEnum Формат отчета. В настоящее время поддерживается только значение TSV.
     */
    public $Format;
    /**
     * @var YesNoEnum Включать ли НДС в денежные суммы в отчете.
     * Если рекламодатель работает в у. е. Директа, допускается только значение YES.
     */
    public $IncludeVAT;
    /**
     * @var YesNoEnum Учитывать ли скидку для денежных сумм в отчете.
     * Если рекламодатель работает в у. е. Директа, допускается только значение NO.
     */
    public $IncludeDiscount;
    /**
     * @var ReportPage Ограничение на количество строк в отчете. Если не задано, используется ограничение 1 000 000.
     */
    private $Page;
    /**
     * @var ReportOrderBy[]
     */
    private $Order = [];

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
        $this->SelectionCriteria = $selectionCriteria;
        $this->FieldNames = $fieldNames;
        $this->ReportName = $reportName;
        $this->ReportType = $reportType;
        $this->DateRangeType = $dateRangeType;
        $this->Format = $format;
        $this->IncludeVAT = $includeVAT;
        $this->IncludeDiscount = $includeDiscount;
    }

    public function addOrderBy(ReportOrderBy $orderBy): void
    {
        $this->Order[] = $orderBy;
    }

    /**
     * @return ReportOrderBy[]
     */
    public function getOrderBy(): array
    {
        return $this->Order;
    }

    /**
     * @return ReportPage
     */
    public function getPage(): ReportPage
    {
        return $this->Page;
    }

    public function setPage(ReportPage $page): void
    {
        $this->Page = $page;
    }
}