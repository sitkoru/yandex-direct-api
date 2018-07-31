<?php

namespace directapi\services\audiencetargets\enum;


use directapi\components\Enum;

class AudienceTargetFieldEnum extends Enum
{
    public const ID = 'Id';
    public const AD_GROUP_ID = 'AdGroupId';
    public const CAMPAIGN_ID = 'CampaignId';
    public const RETARGETING_LIST_ID = 'RetargetingListId';
    public const INTEREST_ID = 'InterestId';
    public const CONTEXT_BID = 'ContextBid';
    public const STRATEGY_PRIORITY = 'StrategyPriority';
    public const STATE = 'State';
}