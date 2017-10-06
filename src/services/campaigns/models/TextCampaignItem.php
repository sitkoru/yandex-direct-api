<?php

namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class TextCampaignItem extends Model
{
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
     * @var RelevantKeywordsSetting
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\RelevantKeywordsSetting")
     */
    public $RelevantKeywords;

    /**
     * @var TextCampaignStrategy
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\TextCampaignStrategy")
     */
    public $BiddingStrategy;
}