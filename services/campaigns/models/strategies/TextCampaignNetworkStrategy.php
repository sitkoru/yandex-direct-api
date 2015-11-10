<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\services\campaigns\enum\TextCampaignNetworkStrategyTypeEnum;

class TextCampaignNetworkStrategy
{
    /**
     * @var TextCampaignNetworkStrategyTypeEnum
     */
    public $BiddingStrategyType;

    /**
     * @var StrategyNetworkDefaultAdd
     */
    public $WbMaximumClicks;

    /**
     * @var StrategyMaximumClicksAdd
     */
    public $WbMaximumConversionRate;

    /**
     * @var StrategyMaximumConversionRateAdd
     */
    public $AverageCpc;

    /**
     * @var StrategyAverageCpcAdd
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