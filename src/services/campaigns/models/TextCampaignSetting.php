<?php

namespace directapi\services\campaigns\models;

use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\services\campaigns\enum\TextCampaignSettingsEnum;
use Symfony\Component\Validator\Constraints as Assert;

class TextCampaignSetting
{
    /**
     * @var \directapi\services\campaigns\enum\TextCampaignSettingsEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\TextCampaignSettingsEnum")
     */
    public $Option;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;

    public function __construct(?TextCampaignSettingsEnum $option = null, ?YesNoEnum $value = null)
    {
        $this->Option = $option;
        $this->Value = $value;
    }
}