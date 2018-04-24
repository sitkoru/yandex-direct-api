<?php

namespace directapi\services\reports\models;


class ReportSelectionCriteria
{
    /**
     * Параметры DateFrom и DateTo обязательны при значении CUSTOM_DATE параметра DateRangeType
     * и недопустимы при других значениях.
     */

    /**
     * @var string Начальная дата отчетного периода, YYYY-MM-DD.
     */
    public $DateFrom;

    /**
     * @var string Конечная дата отчетного периода, YYYY-MM-DD.
     */
    public $DateTo;

    /**
     * @var ReportFilterItem[] Критерии отбора строк
     */
    private $Filters = [];

    public function addFilter(ReportFilterItem $filter)
    {
        $this->Filters[] = $filter;
    }

    /**
     * @return ReportFilterItem[]
     */
    public function getFilters()
    {
        return $this->Filters;
    }
}