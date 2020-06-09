<?php

namespace directapi\services\reports\models;

use directapi\services\reports\enum\ReportFilterFieldsEnum;
use directapi\services\reports\enum\ReportFilterOperatorsEnum;

class ReportFilterItem
{
    /**
     * @var ReportFilterFieldsEnum Имя поля, которое используется для отбора строк.
     *                             Каждое поле можно использовать только в одном критерии:
     *                             несколько критериев с одним и тем же полем не допускается.
     */
    public $Field;

    /**
     * @var ReportFilterOperatorsEnum Оператор, используемый для отбора строк
     */
    public $Operator;

    /**
     * @var string[] Значения, используемые для отбора строк.
     *               Все денежные значения следует указывать в виде целых чисел:
     *               сумм в валюте, умноженных на 1 000 000 (независимо от наличия заголовка returnMoneyInMicros: false).
     */
    public $Values;

    /**
     * ReportFilterItem constructor.
     *
     * @param ReportFilterFieldsEnum|string    $field
     * @param ReportFilterOperatorsEnum|string $operator
     * @param string[]                         $values
     */
    public function __construct($field, $operator, array $values)
    {
        $this->Field = $field;
        $this->Operator = $operator;
        $this->Values = $values;
    }
}
