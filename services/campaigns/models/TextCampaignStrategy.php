<?php

namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class TextCampaignStrategy
{
    /**
     * @var \directapi\services\campaigns\models\strategies\TextCampaignSearchStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\TextCampaignSearchStrategy")
     */
    public $Search;

    /**
     * @var \directapi\services\campaigns\models\strategies\TextCampaignNetworkStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\TextCampaignNetworkStrategy")
     */
    public $Network;

    public function __construct($search = null, $network = null)
    {
        $this->Search = $search;
        $this->Network = $network;
    }
}