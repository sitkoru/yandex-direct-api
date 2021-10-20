<?php

namespace directapi\services\campaigns\models;

use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\services\campaigns\enum\DynamicCampaignSettingsEnum;
use Symfony\Component\Validator\Constraints as Assert;

class DynamicCampaignSetting
{
    /**
     * @var \directapi\services\campaigns\enum\DynamicCampaignSettingsEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\DynamicCampaignSettingsEnum")
     */
    public $Option;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;

    public function __construct(?DynamicCampaignSettingsEnum $option = null, ?YesNoEnum $value = null)
    {
        $this->Option = $option;
        $this->Value = $value;
    }
}
