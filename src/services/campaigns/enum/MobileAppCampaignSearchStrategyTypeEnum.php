<?php

namespace directapi\services\campaigns\enum;


use directapi\components\Enum;

class MobileAppCampaignSearchStrategyTypeEnum extends Enum
{
    const HIGHEST_POSITION = 'HIGHEST_POSITION';
    const LOWEST_COST = 'LOWEST_COST';
    const LOWEST_COST_PREMIUM = 'LOWEST_COST_PREMIUM';
    const LOWEST_COST_GUARANTEE = 'LOWEST_COST_GUARANTEE';
    const IMPRESSIONS_BELOW_SEARCH = 'IMPRESSIONS_BELOW_SEARCH';
    const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    const WB_MAXIMUM_APP_INSTALLS = 'WB_MAXIMUM_APP_INSTALLS';
    const AVERAGE_CPC = 'AVERAGE_CPC';
    const AVERAGE_CPI = 'AVERAGE_CPI';
    const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    const SERVING_OFF = 'SERVING_OFF';
}