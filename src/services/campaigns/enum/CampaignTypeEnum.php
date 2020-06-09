<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class CampaignTypeEnum extends Enum
{
    public const TEXT_CAMPAIGN = 'TEXT_CAMPAIGN';
    public const SMART_CAMPAIGN = 'SMART_CAMPAIGN';
    public const MOBILE_APP_CAMPAIGN = 'MOBILE_APP_CAMPAIGN';
    public const DYNAMIC_TEXT_CAMPAIGN = 'DYNAMIC_TEXT_CAMPAIGN';
    public const CPM_BANNER_CAMPAIGN = 'CPM_BANNER_CAMPAIGN';
    public const MCBANNER_CAMPAIGN = 'MCBANNER_CAMPAIGN';
    public const CPM_DEALS_CAMPAIGN = 'CPM_DEALS_CAMPAIGN';
    public const CPM_FRONTPAGE_CAMPAIGN = 'CPM_FRONTPAGE_CAMPAIGN ';
}
