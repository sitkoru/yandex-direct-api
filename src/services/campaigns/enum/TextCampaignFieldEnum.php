<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class TextCampaignFieldEnum extends Enum
{
    public const COUNTER_IDS = 'CounterIds';
    public const RELEVANT_KEYWORDS = 'RelevantKeywords';
    public const SETTINGS = 'Settings';
    public const BIDDING_STRATEGY = 'BiddingStrategy';
    public const PRIORITY_GOALS = 'PriorityGoals';
}