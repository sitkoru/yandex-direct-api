<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\services\campaigns\enum\TextCampaignSearchStrategyTypeEnum;

class TextCampaignSearchStrategy
{
    /**
     * @var TextCampaignSearchStrategyTypeEnum
     */
    public $BiddingStrategyType;
    /**
     * @var StrategyMaximumClicksAdd
     */
    public $WbMaximumClicks;
    /** @var StrategyMaximumConversionRateAdd
     * */
    public $WbMaximumConversionRate;
    /**
     * @var StrategyAverageCpcAdd
     */
    public $AverageCpc;
    /**
     * @var StrategyAverageCpaAdd
     */
    public $AverageCpa;
    /**
     * @var StrategyAverageRoiAdd
     */
    public $AverageRoi;
    /**
     * @var StrategyWeeklyClickPackageAdd
     */
    public $WeeklyClickPackage;
}