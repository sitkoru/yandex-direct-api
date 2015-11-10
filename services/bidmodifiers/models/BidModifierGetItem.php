<?php

namespace directapi\services\bidmodifiers\models;

use directapi\services\bidmodifiers\enum\BidModifierLevelEnum;
use directapi\services\bidmodifiers\enum\BidModifierTypeEnum;

class BidModifierGetItem
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