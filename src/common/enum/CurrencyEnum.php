<?php

namespace directapi\common\enum;


use directapi\components\Enum;

class CurrencyEnum extends Enum
{
    public const CURRENCY_RUB = 'RUB';
    public const CURRENCY_CHF = 'CHF';
    public const CURRENCY_EUR = 'EUR';
    public const CURRENCY_KZT = 'KZT';
    public const CURRENCY_TRY = 'TRY';
    public const CURRENCY_UAH = 'UAH';
    public const CURRENCY_USD = 'USD';
    public const CURRENCY_YND_FIXED = 'YND_FIXED';
    /**
     * @var string
     */
    public static $prefix = 'CURRENCY';
}