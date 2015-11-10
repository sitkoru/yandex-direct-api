<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\services\campaigns\enum\MobileAppCampaignNetworkStrategyTypeEnum;

class MobileAppCampaignNetworkStrategyAdd
{
    /**
     * @var MobileAppCampaignNetworkStrategyTypeEnum
     */
    public $BiddingStrategyType;

    /**
     * @var StrategyNetworkDefaultAdd
     */
    public $NetworkDefault;

    /**
     * @var StrategyMaximumClicksAdd
     */
    public $WbMaximumClicks;

    /**
     * @var StrategyMaximumAppInstallsAdd
     */
    public $WbMaximumAppInstalls;

    /**
     * @var StrategyAverageCpcAdd
     */
    public $AverageCpc;

    /**
     * @var StrategyAverageCpiAdd
     */
    public $AverageCpi;

    /**
     * @var StrategyWeeklyClickPackageAdd
     */
    public $WeeklyClickPackage;

}