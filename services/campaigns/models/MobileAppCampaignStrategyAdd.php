<?php

namespace directapi\services\campaigns\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAppCampaignStrategyAdd extends Model
{
    /**
     * @var \directapi\services\campaigns\models\strategies\MobileAppCampaignSearchStrategyAdd
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\MobileAppCampaignSearchStrategyAdd")
     */
    public $Search;

    /**
     * @var \directapi\services\campaigns\models\strategies\MobileAppCampaignNetworkStrategyAdd
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\MobileAppCampaignNetworkStrategyAdd")
     */
    public $Network;
}