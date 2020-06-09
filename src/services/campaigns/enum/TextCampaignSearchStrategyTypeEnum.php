<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class TextCampaignSearchStrategyTypeEnum extends Enum
{
    public const HIGHEST_POSITION = 'HIGHEST_POSITION';
    public const LOWEST_COST = 'LOWEST_COST';
    public const LOWEST_COST_PREMIUM = 'LOWEST_COST_PREMIUM';
    public const LOWEST_COST_GUARANTEE = 'LOWEST_COST_GUARANTEE';
    public const IMPRESSIONS_BELOW_SEARCH = 'IMPRESSIONS_BELOW_SEARCH';
    public const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    public const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';
    public const AVERAGE_CPC = 'AVERAGE_CPC';
    public const AVERAGE_CPA = 'AVERAGE_CPA';
    public const AVERAGE_ROI = 'AVERAGE_ROI';
    public const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    public const SERVING_OFF = 'SERVING_OFF';
    public const PAY_FOR_CONVERSION = 'PAY_FOR_CONVERSION';
}
