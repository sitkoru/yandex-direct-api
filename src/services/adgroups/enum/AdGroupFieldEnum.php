<?php

namespace directapi\services\adgroups\enum;


use directapi\components\Enum;

class AdGroupFieldEnum extends Enum
{
    public const ID = 'Id';
    public const CAMPAIGN_ID = 'CampaignId';
    public const STATUS = 'Status';
    public const SERVING_STATUS = 'ServingStatus';
    public const NAME = 'Name';
    public const REGION_IDS = 'RegionIds';
    public const RESTRICTED_REGION_IDS = 'RestrictedRegionIds';
    public const NEGATIVE_KEYWORDS = 'NegativeKeywords';
    public const NEGATIVE_KEYWORD_SHARED_SET_IDS = 'NegativeKeywordSharedSetIds';
    public const TYPE = 'Type';
    public const SUBTYPE = 'Subtype';
    public const TRACKING_PARAMS = 'TrackingParams';
}
