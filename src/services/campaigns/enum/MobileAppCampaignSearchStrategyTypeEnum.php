<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class MobileAppCampaignSearchStrategyTypeEnum extends Enum
{
    public const HIGHEST_POSITION = 'HIGHEST_POSITION';
    public const LOWEST_COST = 'LOWEST_COST';
    public const LOWEST_COST_PREMIUM = 'LOWEST_COST_PREMIUM';
    public const LOWEST_COST_GUARANTEE = 'LOWEST_COST_GUARANTEE';
    public const IMPRESSIONS_BELOW_SEARCH = 'IMPRESSIONS_BELOW_SEARCH';
    public const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    public const WB_MAXIMUM_APP_INSTALLS = 'WB_MAXIMUM_APP_INSTALLS';
    public const AVERAGE_CPC = 'AVERAGE_CPC';
    public const AVERAGE_CPI = 'AVERAGE_CPI';
    public const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    public const SERVING_OFF = 'SERVING_OFF';
}
