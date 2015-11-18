<?php

namespace directapi\services\campaigns\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\models\strategies\MobileAppCampaignNetworkStrategyAdd;
use directapi\services\campaigns\models\strategies\MobileAppCampaignSearchStrategyAdd;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAppCampaignStrategyAdd extends Model
{
    /**
     * @var MobileAppCampaignSearchStrategyAdd
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\MobileAppCampaignSearchStrategyAdd")
     */
    public $Search;

    /**
     * @var MobileAppCampaignNetworkStrategyAdd
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\MobileAppCampaignNetworkStrategyAdd")
     */
    public $Network;
}