<?php

namespace directapi\services\campaigns\enum;


use directapi\components\Enum;

class TextCampaignNetworkStrategyTypeEnum extends Enum
{
    public const NETWORK_DEFAULT = 'NETWORK_DEFAULT';
    public const MAXIMUM_COVERAGE = 'MAXIMUM_COVERAGE';
    public const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';
    public const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';
    public const AVERAGE_CPC = 'AVERAGE_CPC';
    public const AVERAGE_CPA = 'AVERAGE_CPA';
    public const AVERAGE_ROI = 'AVERAGE_ROI';
    public const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';
    public const SERVING_OFF = 'SERVING_OFF';
}