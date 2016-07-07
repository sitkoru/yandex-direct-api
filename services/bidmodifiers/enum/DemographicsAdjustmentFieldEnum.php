<?php

namespace directapi\services\bidmodifiers\enum;

use directapi\components\Enum;

class DemographicsAdjustmentFieldEnum extends Enum
{
    const GENDER = 'Gender';
    const AGE = 'Age';
    const BID_MODIFIER = 'BidModifier';
    const ENABLED = 'Enabled';
}