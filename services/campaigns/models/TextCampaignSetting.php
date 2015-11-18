<?php

namespace directapi\services\campaigns\models;


use directapi\common\enum\YesNoEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\enum\TextCampaignSettingsEnum;
use Symfony\Component\Validator\Constraints as Assert;

class TextCampaignSetting extends Model
{
    /**
     * @var TextCampaignSettingsEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\TextCampaignSettingsEnum")
     */
    public $Option;

    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;
}