<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;

class DemographicsAdjustmentGet extends Model
{
    /**
     * @var \directapi\services\bidmodifiers\enum\GenderEnum
     */
    public $Gender;

    /**
     * @var \directapi\services\ads\enum\AgeRangeEnum
     */
    public $Age;

    /**
     * @var int
     */
    public $BidModifier;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Enabled;
}