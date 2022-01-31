<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class MobileAppCampaignNetworkStrategyTypeEnum extends Enum
{
    public const NETWORK_DEFAULT = 'NETWORK_DEFAULT';
    public const MAXIMUM_COVERAGE = 'MAXIMUM_COVERAGE';
    public const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    public const WB_MAXIMUM_APP_INSTALLS = 'WB_MAXIMUM_APP_INSTALLS';
    public const AVERAGE_CPC = 'AVERAGE_CPC';
    public const AVERAGE_CPI = 'AVERAGE_CPI';
    public const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    public const SERVING_OFF = 'SERVING_OFF';
}
