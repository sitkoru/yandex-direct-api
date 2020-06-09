<?php


namespace directapi\services\campaigns\models;

use directapi\services\campaigns\models\strategies\CpmBannerCampaignNetworkStrategy;
use directapi\services\campaigns\models\strategies\NotApplicableStrategy;
use Symfony\Component\Validator\Constraints as Assert;

class CpmBannerCampaignStrategy
{
    /**
     * @var \directapi\services\campaigns\models\strategies\NotApplicableStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\NotApplicableStrategy")
     */
    public $Search;

    /**
     * @var \directapi\services\campaigns\models\strategies\CpmBannerCampaignNetworkStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\CpmBannerCampaignNetworkStrategy")
     */
    public $Network;

    public function __construct(
        ?NotApplicableStrategy $search = null,
        ?CpmBannerCampaignNetworkStrategy $network = null
    ) {
        $this->Search = $search;
        $this->Network = $network;
    }
}
