<?php

namespace directapi\services\dictionaries\models;

use directapi\components\Model;
use directapi\services\dictionaries\models\CurrencyPropertyItemGet;

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
