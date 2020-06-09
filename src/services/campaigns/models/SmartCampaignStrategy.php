<?php


namespace directapi\services\campaigns\models;

use directapi\services\campaigns\models\strategies\SmartCampaignNetworkStrategy;
use directapi\services\campaigns\models\strategies\SmartCampaignSearchStrategy;
use Symfony\Component\Validator\Constraints as Assert;

class SmartCampaignStrategy
{
    /**
     * @var SmartCampaignSearchStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\SmartCampaignSearchStrategy")
     */
    public $Search;

    /**
     * @var SmartCampaignNetworkStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\SmartCampaignNetworkStrategy")
     */
    public $Network;

    public function __construct(
        ?SmartCampaignSearchStrategy $search = null,
        ?SmartCampaignNetworkStrategy $network = null
    ) {
        $this->Search = $search;
        $this->Network = $network;
    }
}
