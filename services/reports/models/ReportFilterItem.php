<?php

namespace directapi\services\reports\models;


use directapi\services\reports\enum\ReportFilterFieldsEnum;
use directapi\services\reports\enum\ReportFilterOperatorsEnum;

class ReportFilterItem
{
    /**
     * @var ReportFilterFieldsEnum Имя поля, которое используется для отбора строк.
     * Каждое поле можно использовать только в одном критерии:
     * несколько критериев с одним и тем же полем не допускается.
     */
    public $field;

    /**
     * @var ReportFilterOperatorsEnum Оператор, используемый для отбора строк
     */
    public $operator;

    /**
     * @var string[] Значения, используемые для отбора строк.
     * Все денежные значения следует указывать в виде целых чисел:
     * сумм в валюте, умноженных на 1 000 000 (независимо от наличия заголовка returnMoneyInMicros: false).
     */
    public $values;

    /**
     * ReportFilterItem constructor.
     * @param ReportFilterFieldsEnum    $field
     * @param ReportFilterOperatorsEnum $operator
     * @param string[]                  $values
     */
    public function __construct($field, $operator, array $values)
    {
        $this->field = $field;
        $this->operator = $operator;
        $this->values = $values;
    }
}