<?php

namespace directapi\services\reports\models;

class ReportSelectionCriteria implements \JsonSerializable
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

    public function addFilter(ReportFilterItem $filter): void
    {
        $this->Filters[] = $filter;
    }

    /**
     * @return ReportFilterItem[]
     */
    public function getFilters(): array
    {
        return $this->Filters;
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed data which can be serialized by <b>json_encode</b>,
     *               which is a value of any type other than a resource.
     *
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        $params = ['Filter' => $this->Filters];
        if ($this->DateFrom !== null) {
            $params['DateFrom'] = $this->DateFrom;
        }
        if ($this->DateTo !== null) {
            $params['DateTo'] = $this->DateTo;
        }

        return $params;
    }
}
