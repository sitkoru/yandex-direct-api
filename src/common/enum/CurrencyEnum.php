<?php

namespace directapi\common\enum;


use directapi\components\Enum;

class CurrencyEnum extends Enum
{
    public static $prefix = 'CURRENCY';

    const CURRENCY_RUB = 'RUB';
    const CURRENCY_CHF = 'CHF';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_KZT = 'KZT';
    const CURRENCY_TRY = 'TRY';
    const CURRENCY_UAH = 'UAH';
    const CURRENCY_USD = 'USD';
    const CURRENCY_YND_FIXED = 'YND_FIXED';
}