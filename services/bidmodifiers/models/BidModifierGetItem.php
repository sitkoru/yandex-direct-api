<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;
use directapi\services\bidmodifiers\enum\BidModifierLevelEnum;
use directapi\services\bidmodifiers\enum\BidModifierTypeEnum;

class BidModifierGetItem extends Model
{
    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var int
     */
    public $Id;

    /**
     * @var BidModifierLevelEnum
     */
    public $Level;

    /**
     * @var BidModifierTypeEnum
     */
    public $Type;

    /**
     * @var MobileAdjustmentGet
     */
    public $MobileAdjustment;

    /**
     * @var DemographicsAdjustmentGet
     */
    public $DemographicsAdjustment;

    /**
     * @var RetargetingAdjustmentGet
     */
    public $RetargetingAdjustment;
}