<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class TextCampaignNetworkStrategyTypeEnum extends Enum
{
    /**
     * «Ручное управление ставками с оптимизацией», включено раздельное управление ставками на поиске и в сетях
     */
    public const MAXIMUM_COVERAGE = 'MAXIMUM_COVERAGE';

    /**
     * «Оптимизация кликов», ограничивать по недельному бюджету
     */
    public const WB_MAXIMUM_CLICKS = 'WB_MAXIMUM_CLICKS';

    /**
     * «Оптимизация конверсий», без указания средней цены конверсии
     */
    public const WB_MAXIMUM_CONVERSION_RATE = 'WB_MAXIMUM_CONVERSION_RATE';

    /**
     * «Оптимизация кликов», ограничивать по средней цене клика
     */
    public const AVERAGE_CPC = 'AVERAGE_CPC';

    /**
     * «Оптимизация конверсий», удерживать среднюю цену конверсии
     */
    public const AVERAGE_CPA = 'AVERAGE_CPA';

    /**
     * «Оптимизация рентабельности»
     */
    public const AVERAGE_ROI = 'AVERAGE_ROI';

    /**
     * «Оптимизация доли рекламных расходов»
     */
    public const AVERAGE_CRR = 'AVERAGE_CRR';

    /**
     * «Оптимизация конверсий», оплата за конверсии (для кампаний с типом «Текстово-графические объявления», «Динамические объявления»)
     */
    public const PAY_FOR_CONVERSION = 'PAY_FOR_CONVERSION';

    /**
     * «Оптимизация кликов», ограничивать по пакету кликов
     */
    public const WEEKLY_CLICK_PACKAGE = 'WEEKLY_CLICK_PACKAGE';

    /**
     * Показы отключены
     */
    public const SERVING_OFF = 'SERVING_OFF';
}
