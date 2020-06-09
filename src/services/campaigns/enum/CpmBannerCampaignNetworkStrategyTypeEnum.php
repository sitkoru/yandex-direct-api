<?php


namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class CpmBannerCampaignNetworkStrategyTypeEnum extends Enum
{
    public const MANUAL_CPM = 'MANUAL_CPM';
    public const CP_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS = 'CP_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS';
    public const WB_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS = 'WB_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS';
    public const CP_MAXIMUM_IMPRESSIONS = 'CP_MAXIMUM_IMPRESSIONS';
    public const WB_MAXIMUM_IMPRESSIONS = 'WB_MAXIMUM_IMPRESSIONS';
    public const UNKNOWN = 'UNKNOWN';
}
