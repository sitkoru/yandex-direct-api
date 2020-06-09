<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class SmartCampaignSearchStrategyTypeEnum extends Enum
{
    public const AVERAGE_CPC_PER_CAMP = 'AVERAGE_CPC_PER_CAMP';
    public const AVERAGE_CPC_PER_FILTER = 'AVERAGE_CPC_PER_FILTER';
    public const AVERAGE_CPA_PER_CAMP = 'AVERAGE_CPA_PER_CAMP';
    public const AVERAGE_CPA_PER_FILTER = 'AVERAGE_CPA_PER_FILTER';
    public const AVERAGE_ROI = 'AVERAGE_ROI';
    public const PAY_FOR_CONVERSION = 'PAY_FOR_CONVERSION';
    public const SERVING_OFF = 'SERVING_OFF';
    public const UNKNOWN = 'UNKNOWN';
}
