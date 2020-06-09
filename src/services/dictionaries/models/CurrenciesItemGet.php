<?php

namespace directapi\services\dictionaries\models;

use directapi\components\Model;

class CurrenciesItemGet extends Model
{
    /**
     * @var string
     */
    public $Currency;

    /**
     * @var CurrencyPropertyItemGet[]
     */
    public $Properties;
}
