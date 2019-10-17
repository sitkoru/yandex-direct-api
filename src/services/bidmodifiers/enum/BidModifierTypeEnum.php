<?php

namespace directapi\services\bidmodifiers\enum;


use directapi\components\Enum;

class BidModifierTypeEnum extends Enum
{
    public const MOBILE_ADJUSTMENT = 'MOBILE_ADJUSTMENT';
    public const DEMOGRAPHICS_ADJUSTMENT = 'DEMOGRAPHICS_ADJUSTMENT';
    public const RETARGETING_ADJUSTMENT = 'RETARGETING_ADJUSTMENT';
}