<?php

namespace directapi\services\bidmodifiers\models;


use directapi\common\enum\YesNoEnum;

class RetargetingAdjustmentGet
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
     * @var YesNoEnum
     */
    public $Accessible;

    /**
     * @var YesNoEnum
     */
    public $Enabled;
}