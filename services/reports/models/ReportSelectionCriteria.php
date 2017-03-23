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
    public $dateFrom;

    /**
     * @var string Конечная дата отчетного периода, YYYY-MM-DD.
     */
    public $dateTo;

    /**
     * @var ReportFilterItem[] Критерии отбора строк
     */
    public $filters = [];

    public function addFilter(ReportFilterItem $filter)
    {
        $this->filters[] = $filter;
    }
}