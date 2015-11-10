<?php

namespace directapi\services\campaigns\models;

use directapi\common\containers\ArrayOfInteger;

class TextCampaignItem
{
    /**
     * @var TextCampaignSetting[]
     */
    public $Settings;

    /**
     * @var ArrayOfInteger
     */
    public $CounterIds;

    /**
     * @var RelevantKeywordsSetting
     */
    public $RelevantKeywords;

    /**
     * @var TextCampaignStrategy
     */
    public $BiddingStrategy;
}