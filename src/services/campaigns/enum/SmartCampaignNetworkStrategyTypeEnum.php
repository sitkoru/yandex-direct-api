<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class SmartCampaignNetworkStrategyTypeEnum extends Enum
{
    /**
     * «Оптимизация количества конверсий», CPA на всю кампанию
     */
    public const AVERAGE_CPA_PER_CAMPAIGN = 'AVERAGE_CPA_PER_CAMPAIGN';

    /**
     * «Оптимизация количества конверсий», CPA на каждый фильтр
     */
    public const AVERAGE_CPA_PER_FILTER = 'AVERAGE_CPA_PER_FILTER';

    /**
     * «Оптимизация количества кликов», CPC на всю кампанию
     */
    public const AVERAGE_CPC_PER_CAMPAIGN = 'AVERAGE_CPC_PER_CAMPAIGN';

    /**
     * «Оптимизация количества кликов», CPC на каждый фильтр
     */
    public const AVERAGE_CPC_PER_FILTER = 'AVERAGE_CPC_PER_FILTER';

    /**
     * «Оптимизация рентабельности»
     */
    public const AVERAGE_ROI = 'AVERAGE_ROI';

    /**
     * Настройки показов в сетях в зависимости от настроек на поиске
     */
    public const NETWORK_DEFAULT = 'NETWORK_DEFAULT';

    /**
     * «Оптимизация количества конверсий», оплата за конверсии (для кампаний с типом «Смарт-баннеры»)
     */
    public const PAY_FOR_CONVERSION_PER_CAMPAIGN = 'PAY_FOR_CONVERSION_PER_CAMPAIGN';

    /**
     * Показы отключены
     */
    public const SERVING_OFF = 'SERVING_OFF';

    /**
     * Зарезервировано для стратегий, не поддерживаемых в данной версии API
     */
    public const UNKNOWN = 'UNKNOWN';
}
