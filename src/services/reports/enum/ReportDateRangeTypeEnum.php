<?php

namespace directapi\services\reports\enum;


class ReportDateRangeTypeEnum
{
    /**
     * Текущий день
     */
    const TODAY = 'TODAY';

    /**
     * Вчера
     */
    const YESTERDAY = 'YESTERDAY';

    /**
     * Указанное количество предыдущих дней, не включая текущий день
     */
    const LAST_3_DAYS = 'LAST_3_DAYS';
    const LAST_5_DAYS = 'LAST_5_DAYS';
    const LAST_7_DAYS = 'LAST_7_DAYS';
    const LAST_14_DAYS = 'LAST_14_DAYS';
    const LAST_30_DAYS = 'LAST_30_DAYS';
    const LAST_90_DAYS = 'LAST_90_DAYS';
    const LAST_365_DAYS = 'LAST_365_DAYS';

    /**
     * Текущая неделя начиная с понедельника, включая текущий день
     */
    const THIS_WEEK_MON_TODAY = 'THIS_WEEK_MON_TODAY';

    /**
     * Текущая неделя начиная с воскресенья, включая текущий день
     */
    const THIS_WEEK_SUN_TODAY = 'THIS_WEEK_SUN_TODAY';

    /**
     * Прошлая неделя с понедельника по воскресенье
     */
    const LAST_WEEK = 'LAST_WEEK';

    /**
     * Прошлая рабочая неделя с понедельника по пятницу
     */
    const LAST_BUSINESS_WEEK = 'LAST_BUSINESS_WEEK';

    /**
     * Прошлая неделя с воскресенья по субботу
     */
    const LAST_WEEK_SUN_SAT = 'LAST_WEEK_SUN_SAT';

    /**
     * Текущий месяц
     */
    const THIS_MONTH = 'THIS_MONTH';

    /**
     * Предыдущий месяц
     */
    const LAST_MONTH = 'LAST_MONTH';

    /**
     * Вся доступная статистика, включая текущий день
     */
    const ALL_TIME = 'ALL_TIME';

    /**
     * Произвольный период. При выборе этого значения необходимо указать даты начала и окончания периода
     * в параметрах DateFrom и DateTo
     */
    const CUSTOM_DATE = 'CUSTOM_DATE';

    /**
     * период, за который статистика могла измениться.
     * Период выбирается автоматически в зависимости от того,
     * произошла ли в предыдущий день корректировка статистики
     */
    const AUTO = 'AUTO';
}