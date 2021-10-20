<?php

namespace directapi\services\campaigns\models;

use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\services\campaigns\enum\SmartCampaignSettingsEnum;
use Symfony\Component\Validator\Constraints as Assert;

class SmartCampaignSetting
{
    /**
     * @var \directapi\services\campaigns\enum\SmartCampaignSettingsEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\SmartCampaignSettingsEnum")
     */
    public $Option;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;

    public function __construct(?SmartCampaignSettingsEnum $option = null, ?YesNoEnum $value = null)
    {
        $this->Option = $option;
        $this->Value = $value;
    }
}
