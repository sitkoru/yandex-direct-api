<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;

class RetargetingAdjustmentGet extends Model
{
    /**
     * @var int
     */
    public $RetargetingConditionId;

    /**
     * @var int
     */
    public $BidModifier;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Accessible;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Enabled;
}