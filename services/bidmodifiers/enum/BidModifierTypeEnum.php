<?php

namespace directapi\services\bidmodifiers\enum;


use directapi\components\Enum;

class BidModifierTypeEnum extends Enum
{
    const DEMOGRAPHICS_ADJUSTMENT = 'DEMOGRAPHICS_ADJUSTMENT';
    const RETARGETING_ADJUSTMENT = 'RETARGETING_ADJUSTMENT';
}