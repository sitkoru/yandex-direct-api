<?php

namespace directapi\services\reports\enum;

use directapi\components\Enum;

class ReportTypesEnum extends Enum
{
    /**
     * Статистика по аккаунту рекламодателя
     */
    public const ACCOUNT_PERFORMANCE_REPORT = 'ACCOUNT_PERFORMANCE_REPORT';

    /**
     * Статистика по кампаниям
     */
    public const CAMPAIGN_PERFORMANCE_REPORT = 'CAMPAIGN_PERFORMANCE_REPORT';

    /**
     * Статистика по группам объявлений
     */
    public const ADGROUP_PERFORMANCE_REPORT = 'ADGROUP_PERFORMANCE_REPORT';

    /**
     * Статистика по объявлениям
     */
    public const AD_PERFORMANCE_REPORT = 'AD_PERFORMANCE_REPORT';

    /**
     *    Статистика по условиям показа
     */
    public const CRITERIA_PERFORMANCE_REPORT = 'CRITERIA_PERFORMANCE_REPORT';

    /**
     * Статистика с произвольными группировками
     */
    public const CUSTOM_REPORT = 'CUSTOM_REPORT';

    /**
     * Статистика по поисковым запросам
     */
    public const SEARCH_QUERY_PERFORMANCE_REPORT = 'SEARCH_QUERY_PERFORMANCE_REPORT';
}