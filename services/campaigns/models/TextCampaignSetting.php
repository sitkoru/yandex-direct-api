<?php

namespace directapi\services\campaigns\models;


use directapi\common\enum\YesNoEnum;
use directapi\services\campaigns\enum\TextCampaignSettingsEnum;

class TextCampaignSetting
{
    /**
     * @var TextCampaignSettingsEnum
     */
    public $Option;

    /**
     * @var YesNoEnum
     */
    public $Value;
}