<?php


namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;

class RegionalAdjustmentGet extends Model
{
    /**
     * @var int
     */
    public $RegionId;

    /**
     * @var int
     */
    public $BidModifier;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Enabled;
}
