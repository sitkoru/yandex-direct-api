<?php

namespace directapi\services\bidmodifiers\models;


class BidModifierAddItem
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
     * @var MobileAdjustmentAdd
     */
    public $MobileAdjustment;

    /**
     * @var DemographicsAdjustmentAdd[]
     */
    public $DemographicsAdjustments;

    /***
     * @var RetargetingAdjustmentAdd[]
     */
    public $RetargetingAdjustments;
}