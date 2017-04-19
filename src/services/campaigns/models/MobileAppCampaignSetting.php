<?php

namespace directapi\services\campaigns\models;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAppCampaignSetting extends Model
{
    /**
     * @var \directapi\services\campaigns\enum\MobileAppCampaignSettingsEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\MobileAppCampaignSettingsEnum")
     */
    public $Option;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;
}