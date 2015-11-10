<?php

namespace directapi\services\bidmodifiers\models;

use directapi\services\ads\enum\AgeRangeEnum;
use directapi\services\bidmodifiers\enum\GenderEnum;

class DemographicsAdjustmentAdd
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
}