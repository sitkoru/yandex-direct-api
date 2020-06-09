<?php

namespace directapi\services\adextensions\models;

use directapi\components\Model;

class PriceExtensionUpdateItem extends Model
{
    /**
     * @var double
     */
    public $Price;

    /**
     * @var double
     */
    public $OldPrice;

    /**
     * @var \directapi\services\adextensions\enum\AdPriceQualifierEnum
     */
    public $PriceQualifier;

    /**
     * @var \directapi\common\enum\CurrencyEnum
     */
    public $PriceCurrency;
}
