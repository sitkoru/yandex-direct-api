<?php

namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAppCampaignItem extends Model
{
    /**
     * @var MobileAppCampaignSetting[]
     * @Assert\Valid()
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\models\MobileAppCampaignSetting")
     */
    public $Settings;

    /**
     * @var MobileAppCampaignStrategyAdd
     * @Assert\Valid()
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\services\campaigns\models\MobileAppCampaignStrategyAdd")
     */
    public $BiddingStrategy;
}
