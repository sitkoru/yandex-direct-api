<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\services\campaigns\enum\MobileAppCampaignSearchStrategyTypeEnum;

class MobileAppCampaignSearchStrategyAdd
{
    /**
     * @var MobileAppCampaignSearchStrategyTypeEnum
     */
    public $BiddingStrategyType;

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