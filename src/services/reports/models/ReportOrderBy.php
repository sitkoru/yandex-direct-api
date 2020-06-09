<?php

namespace directapi\services\reports\models;

use directapi\services\reports\enum\ReportOrderByFieldsEnum;

class ReportOrderBy
{
    /**
     * @var ReportOrderByFieldsEnum Имя поля, которое используется для сортировки.
     */
    public $field;

    /**
     * @var string
     *             Направление сортировки:
     *             ASCENDING — по возрастанию;
     *             DESCENDING — по убыванию.
     *             Если не задано, выполняется сортировка по возрастанию.
     */
    public $sortOrder;

    /**
     * ReportOrderBy constructor.
     *
     * @param ReportOrderByFieldsEnum $field
     * @param string                  $sortOrder
     */
    public function __construct($field, $sortOrder = 'ASCENDING')
    {
        $this->field = $field;
        $this->sortOrder = $sortOrder;
    }
}
