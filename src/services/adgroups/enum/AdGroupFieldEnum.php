<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class AdGroupFieldEnum extends Enum
{
    public const ID = 'Id';
    public const CAMPAIGN_ID = 'CampaignId';
    public const STATUS = 'Status';
    public const NAME = 'Name';
    public const REGION_IDS = 'RegionIds';
    public const NEGATIVE_KEYWORDS = 'NegativeKeywords';
    public const TYPE = 'Type';
}