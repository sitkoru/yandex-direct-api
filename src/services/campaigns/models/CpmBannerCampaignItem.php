<?php


namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class CpmBannerCampaignItem extends Model
{
    /**
     * @var CpmBannerCampaignStrategy
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\CpmBannerCampaignStrategy")
     */
    public $BiddingStrategy;

    /**
     * @var CpmCampaignSetting[]
     * @Assert\Valid()
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\models\CpmCampaignSetting")
     */
    public $Settings;

    /**
     * @var \directapi\common\containers\ArrayOfInteger
     * @Assert\Type(type="directapi\common\containers\ArrayOfInteger")
     */
    public $CounterIds;

    /**
     * @var FrequencyCapSetting
     * @Assert\Type(type="directapi\services\campaigns\models\FrequencyCapSetting")
     */
    public $FrequencyCap;
}
