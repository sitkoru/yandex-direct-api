<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;

class MobileAdjustmentGet extends Model
{
    /**
     * @var int
     */
    public $BidModifier;

    /**
     * @var \directapi\services\bidmodifiers\enum\OperatingSystemTypeEnum
     */
    public $OperatingSystemType;
}
