<?php

namespace directapi\services\bidmodifiers\models;

use directapi\common\enum\YesNoEnum;
use directapi\components\Model;
use directapi\services\ads\enum\AgeRangeEnum;
use directapi\services\bidmodifiers\enum\GenderEnum;

class DemographicsAdjustmentGet extends Model
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