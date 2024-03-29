<?php


namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class SmartCampaignItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $CounterId;

    /**
     * @var \directapi\services\campaigns\enum\AttributionModelEnum
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\enum\AttributionModelEnum")
     */
    public $AttributionModel;

    /**
     * @var SmartCampaignStrategy
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\SmartCampaignStrategy")
     */
    public $BiddingStrategy;

    /**
     * @var SmartCampaignSetting[]
     * @Assert\Valid()
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\models\SmartCampaignSetting")
     */
    public $Settings;

    /**
     * @var PriorityGoalsArray
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\PriorityGoalsArray")
     */
    public $PriorityGoals;
}
