<?php


namespace directapi\services\campaigns\models;

use directapi\services\campaigns\models\strategies\DynamicTextCampaignSearchStrategy;
use directapi\services\campaigns\models\strategies\NotApplicableStrategy;
use Symfony\Component\Validator\Constraints as Assert;

class DynamicTextCampaignStrategy
{
    /**
     * @var \directapi\services\campaigns\models\strategies\DynamicTextCampaignSearchStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\DynamicTextCampaignSearchStrategy")
     */
    public $Search;

    /**
     * @var \directapi\services\campaigns\models\strategies\NotApplicableStrategy
     * @Assert\NotBlank()
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\NotApplicableStrategy")
     */
    public $Network;

    public function __construct(
        ?DynamicTextCampaignSearchStrategy $search = null,
        ?NotApplicableStrategy $network = null
    ) {
        $this->Search = $search;
        $this->Network = $network;
    }
}
