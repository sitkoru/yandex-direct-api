<?php

namespace directapi\services\campaigns\models;


use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\enum\MobileAppCampaignSettingsEnum;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAppCampaignSetting extends Model
{
    /**
     * @var MobileAppCampaignSettingsEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\MobileAppCampaignSettingsEnum")
     */
    public $Option;

    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;
}