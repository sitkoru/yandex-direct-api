<?php

namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\models\strategies\TextCampaignNetworkStrategy;
use directapi\services\campaigns\models\strategies\TextCampaignSearchStrategy;
use Symfony\Component\Validator\Constraints as Assert;

class TextCampaignStrategy extends Model
{
    /**
     * @var TextCampaignSearchStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\TextCampaignSearchStrategy")
     */
    public $Search;

    /**
     * @var TextCampaignNetworkStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\TextCampaignNetworkStrategy")
     */
    public $Network;
}