<?php


namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\enum\AttributionModelEnum;
use Symfony\Component\Validator\Constraints as Assert;

class SmartCampaignItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $CounterId;

    /**
     * @var AttributionModelEnum
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
     * @var TextCampaignSetting[]
     * @Assert\Valid()
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\models\TextCampaignSetting")
     */
    public $Settings;

    /**
     * @var PriorityGoalsArray
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\PriorityGoalsArray")
     */
    public $PriorityGoals;
}
