<?php

namespace directapi\services\campaigns\models;


use directapi\common\enum\YesNoEnum;
use directapi\services\campaigns\enum\MobileAppCampaignSettingsEnum;

class MobileAppCampaignSetting
{
    /**
     * @var MobileAppCampaignSettingsEnum
     */
    public $Option;

    /**
     * @var YesNoEnum
     */
    public $Value;
}