<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class SmartCampaignSearchStrategyTypeEnum extends Enum
{
    /**
     * «Оптимизация количества конверсий», CPC или CPA на всю кампанию
     */
    public const AVERAGE_CPA_PER_CAMPAIGN = 'AVERAGE_CPA_PER_CAMPAIGN';

    /**
     * «Оптимизация количества конверсий», CPC или CPA на каждый фильтр
     */
    public const AVERAGE_CPC_PER_FILTER = 'AVERAGE_CPC_PER_FILTER';

    /**
     * «Оптимизация количества кликов», CPC на всю кампанию
     */
    public const AVERAGE_CPC_PER_CAMPAIGN = 'AVERAGE_CPC_PER_CAMPAIGN';

    /**
     * «Оптимизация количества кликов», CPC на каждый фильтр
     */
    public const AVERAGE_CPA_PER_FILTER = 'AVERAGE_CPA_PER_FILTER';

    /**
     * «Оптимизация рентабельности»
     */
    public const AVERAGE_ROI = 'AVERAGE_ROI';

    /**
     * «Оптимизация количества конверсий», оплата за конверсии (для кампаний с типом «Смарт-баннеры»)
     */
    public const PAY_FOR_CONVERSION_PER_CAMPAIGN = 'PAY_FOR_CONVERSION_PER_CAMPAIGN';

    /**
     * Показы отключены
     */
    public const SERVING_OFF = 'SERVING_OFF';

    public const UNKNOWN = 'UNKNOWN';
}
