<?php

namespace directapi\services\bidmodifiers\models;

use directapi\common\enum\YesNoEnum;
use directapi\services\ads\enum\AgeRangeEnum;
use directapi\services\bidmodifiers\enum\GenderEnum;

class DemographicsAdjustmentGet
{
    /**
     * @var GenderEnum
     */
    public $Gender;

    /**
     * @var AgeRangeEnum
     */
    public $Age;

    /**
     * @var int
     */
    public $BidModifier;

    /**
     * @var YesNoEnum
     */
    public $Enabled;
}