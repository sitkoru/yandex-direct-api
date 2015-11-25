<?php

namespace directapi\services\campaigns\models;

use directapi\components\constraints as DirectApiAssert;
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

    public function __construct($option = null, $value = null)
    {
        $this->Option = $option;
        $this->Value = $value;
    }
}