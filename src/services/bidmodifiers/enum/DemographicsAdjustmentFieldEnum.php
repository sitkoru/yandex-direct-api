<?php

namespace directapi\services\bidmodifiers\enum;

use directapi\components\Enum;

class DemographicsAdjustmentFieldEnum extends Enum
{
    public const GENDER = 'Gender';
    public const AGE = 'Age';
    public const BID_MODIFIER = 'BidModifier';
    public const ENABLED = 'Enabled';
}