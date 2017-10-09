<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class AdGroupFieldEnum extends Enum
{
    const ID = 'Id';
    const CAMPAIGN_ID = 'CampaignId';
    const STATUS = 'Status';
    const NAME = 'Name';
    const REGION_IDS = 'RegionIds';
    const NEGATIVE_KEYWORDS = 'NegativeKeywords';
    const TYPE = 'Type';
}