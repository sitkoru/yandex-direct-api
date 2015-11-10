<?php

namespace directapi\services\campaigns\models;


use directapi\services\campaigns\models\strategies\MobileAppCampaignNetworkStrategyAdd;
use directapi\services\campaigns\models\strategies\MobileAppCampaignSearchStrategyAdd;

class MobileAppCampaignStrategyAdd
{
    /**
     * @var MobileAppCampaignSearchStrategyAdd
     */
    public $Search;

    /**
     * @var MobileAppCampaignNetworkStrategyAdd
     */
    public $Network;
}