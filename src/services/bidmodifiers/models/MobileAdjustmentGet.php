<?php

namespace directapi\services\bidmodifiers\models;


use directapi\components\Model;
use directapi\services\bidmodifiers\enum\OperatingSystemTypeEnum;

class MobileAdjustmentGet extends Model
{
    /**
     * @var int
     */
    public $BidModifier;

    /**
     * @var OperatingSystemTypeEnum
     */
    public $OperatingSystemType;
}