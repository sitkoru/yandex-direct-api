<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;

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
     * @var \directapi\services\bidmodifiers\enum\BidModifierLevelEnum
     */
    public $Level;

    /**
     * @var \directapi\services\bidmodifiers\enum\BidModifierTypeEnum
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

    /**
     * @var RegionalAdjustmentGet
     */
    public $RegionalAdjustment;

    /**
     * @var VideoAdjustmentGet
     */
    public $VideoAdjustment;

    /**
     * @var SmartAdAdjustmentGet
     */
    public $SmartAdAdjustment;
}
