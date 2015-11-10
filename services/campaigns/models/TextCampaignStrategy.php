<?php

namespace directapi\services\campaigns\models;

use directapi\services\campaigns\models\strategies\TextCampaignNetworkStrategy;
use directapi\services\campaigns\models\strategies\TextCampaignSearchStrategy;

class TextCampaignStrategy
{
    /**
     * @var TextCampaignSearchStrategy
     */
    public $Search;
    /**
     * @var TextCampaignNetworkStrategy
     */
    public $Network;
}