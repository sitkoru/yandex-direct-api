<?php


namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\enum\AttributionModelEnum;
use Symfony\Component\Validator\Constraints as Assert;

class DynamicTextCampaignItem extends Model
{
    /**
     * @var DynamicTextCampaignStrategy
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\DynamicTextCampaignStrategy")
     */
    public $BiddingStrategy;

    /**
     * @var TextCampaignSetting[]
     * @Assert\Valid()
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\models\TextCampaignSetting")
     */
    public $Settings;

    /**
     * @var \directapi\common\containers\ArrayOfInteger
     * @Assert\Type(type="directapi\common\containers\ArrayOfInteger")
     */
    public $CounterIds;

    /**
     * @var PriorityGoalsArray
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\PriorityGoalsArray")
     */
    public $PriorityGoals;

    /**
     * @var AttributionModelEnum
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\enum\AttributionModelEnum")
     */
    public $AttributionModel;
}
