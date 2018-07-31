<?php

namespace directapi\services\reports\enum;

use directapi\components\Enum;

class ReportOrderByFieldsEnum extends Enum
{
    /**
     * Формат показа объявления:
     *   IMAGE — с изображением.
     *   TEXT — текстовый.
     */
    public const AD_FORMAT = 'AdFormat';

    /**
     * Идентификатор группы объявлений.
     */
    public const AD_GROUP_ID = 'AdGroupId';

    /**
     * Название группы объявлений.
     */
    public const AD_GROUP_NAME = 'AdGroupName';

    /**
     * Идентификатор объявления.
     */
    public const AD_ID = 'AdId';

    /**
     * Тип площадки, где показано объявление:
     *  SEARCH — на поиске;
     *  AD_NETWORK — в сетях.
     */
    public const AD_NETWORK_TYPE = 'AdNetworkType';

    /**
     * Возрастная группа пользователя: одно из значений AGE_0_17, AGE_18_24, AGE_25_34, AGE_35_44, AGE_45 или UNKNOWN.
     */
    public const AGE = 'Age';

    /**
     * Средняя позиция, на которой произошел клик по объявлению.
     * При расчете учитываются только клики на первой странице результатов поиска Яндекса.
     * Наивысшая позиция имеет номер 1.
     */
    public const AVG_CLICK_POSITION = 'AvgClickPosition';

    /**
     * Средняя стоимость клика.
     */
    public const AVG_CPC = 'AvgCpc';

    /**
     * Средняя позиция показа объявления.
     * При расчете учитываются только показы на первой странице результатов поиска Яндекса.
     * Наивысшая позиция имеет номер 1.
     */
    public const AVG_IMPRESSION_POSITION = 'AvgImpressionPosition';

    /**
     * Средняя глубина просмотра сайта, то есть количество просмотренных страниц (по данным Яндекс.Метрики).
     */
    public const AVG_PAGE_VIEWS = 'AvgPageviews';

    /**
     * Доля отказов в общем количестве визитов, в процентах (по данным Яндекс.Метрики).
     */
    public const BOUNCE_RATE = 'BounceRate';

    /**
     * Количество отказов (по данным Яндекс.Метрики).
     */
    public const BOUNCES = 'Bounces';

    /**
     * Идентификатор кампании.
     */
    public const CAMPAIGN_ID = 'CampaignId';

    /**
     * Название кампании.
     */
    public const CAMPAIGN_NAME = 'CampaignName';

    /**
     * Тип кампании:
     *  TEXT_CAMPAIGN
     *  MOBILE_APP_CAMPAIGN
     *  DYNAMIC_TEXT_CAMPAIGN
     *  SMART_BANNER_CAMPAIGN
     */
    public const CAMPAIGN_TYPE = 'CampaignType';

    /**
     * Тип связи:
     *  CELLULAR — мобильная связь;
     *  STATIONARY — wi-fi или проводной интернет;
     *  UNKNOWN — определить не удалось.
     */
    public const CARRIER_TYPE = 'CarrierType';

    /**
     * Количество кликов.
     */
    public const CLICKS = 'Clicks';

    /**
     * По какой части объявления кликнул пользователь:
     *  TITLE — заголовок объявления.
     *  SITELINK1, SITELINK2, SITELINK3, SITELINK4 — быстрые ссылки.
     *  VCARD — визитка.
     *  DISPLAY_URL_PATH — отображаемая ссылка.
     *  MOBILE_APP_ICON — иконка приложения (для рекламы мобильных приложений).
     *  BUTTON — кнопка загрузки/установки (для рекламы мобильных приложений).
     *  UNKNOWN.
     */
    public const CLICK_TYPE = 'ClickType';

    /**
     * Доля целевых визитов в общем количестве визитов, в процентах (по данным Яндекс.Метрики).
     */
    public const CONVERSION_RATE = 'ConversionRate';

    /**
     * Количество целевых визитов (конверсий) (по данным Яндекс.Метрики).
     */
    public const CONVERSIONS = 'Conversions';

    /**
     * Стоимость кликов.
     */
    public const COST = 'Cost';

    /**
     * Средняя стоимость целевого визита (по данным Яндекс.Метрики):
     * отношение стоимости кликов к количеству целевых визитов.
     */
    public const COST_PER_CONVERSION = 'CostPerConversion';

    /**
     * Тип условия показа:
     *  KEYWORD — ключевая фраза.
     *  AUDIENCE_TARGET — условие нацеливания на аудиторию.
     *  DYNAMIC_TEXT_AD_TARGET — условие нацеливания для динамических объявлений или фильтр.
     *  SMART_BANNER_FILTER — фильтр для смарт-баннеров.
     */
    public const CRITERIA_TYPE = 'CriteriaType';

    /**
     * CTR, в процентах.
     */
    public const CTR = 'Ctr';

    /**
     * Дата, за которую приведена статистика, в формате YYYY-MM-DD.
     */
    public const DATE = 'Date';

    /**
     * Тип устройства, на котором было показано объявление: DESKTOP, MOBILE или TABLET.
     */
    public const DEVICE = 'Device';

    /**
     * Наименование внешней сети (SSP).
     */
    public const EXTERNAL_NETWORK_NAME = 'ExternalNetworkName';

    /**
     * Пол пользователя: GENDER_MALE, GENDER_FEMALE или UNKNOWN.
     */
    public const GENDER = 'Gender';

    /**
     * Рентабельность инвестиций в рекламу, до двух знаков после запятой (по данным Яндекс.Метрики)
     */
    public const GOALS_ROI = 'GoalsRoi';

    /**
     * Количество показов.
     */
    public const IMPRESSIONS = 'Impressions';

    /**
     * Доля выигранных аукционов в общем количестве аукционов, в которых участвовали рекламные материалы, в процентах.
     * Данные доступны только для смарт-баннеров.
     */
    public const IMPRESSION_SHARE = 'ImpressionShare';

    /**
     * Идентификатор региона местонахождения пользователя.
     */
    public const LOCATION_OF_PRESENCE_ID = 'LocationOfPresenceId';

    /**
     * Название региона местонахождения пользователя.
     */
    public const LOCATION_OF_PRESENCE_NAME = 'LocationOfPresenceName';

    /**
     * Тип соответствия ключевой фразе:
     *  RELATED_KEYWORD — показ по автоматически добавленной фразе.
     *  SYNONYM — показ по синониму ключевой фразы.
     *  NONE — в остальных случаях.
     */
    public const MATCH_TYPE = 'MatchType';

    /**
     * Название региона местонахождения пользователя.
     */
    public const MOBILE_PLATFORM = 'MobilePlatform';

    /**
     * Дата начала месяца, в формате YYYY-MM-DD.
     */
    public const MONTH = 'Month';

    /**
     * Название площадки показов.
     */
    public const PLACEMENT = 'Placement';

    /**
     * Дата начала квартала, в формате YYYY-MM-DD.
     */
    public const QUARTER = 'Quarter';

    /**
     * Поисковый запрос, по которому было показано объявление.
     */
    public const QUERY = 'Query';

    /**
     * Доход (по данным Яндекс.Метрики).
     */
    public const REVENUE = 'Revenue';

    /**
     * Идентификатор условия подбора аудитории,
     * в соответствии с которым применена корректировка ставок для посетивших сайт.
     */
    public const RL_ADJUSTMENT_ID = 'RlAdjustmentId';

    /**
     * Количество визитов (по данным Яндекс.Метрики).
     * Для рекламы мобильных приложений в качестве количества визитов выводится количество кликов.
     */
    public const SESSIONS = 'Sessions';

    /**
     * Блок показа объявления:
     *  PREMIUMBLOCK — спецразмещение;
     *  OTHER — другие блоки.
     */
    public const SLOT = 'Slot';

    /**
     * Идентификатор региона таргетинга.
     * В случае использования расширенного геотаргетинга может отличаться от региона местонахождения пользователя,
     * см. раздел Регионы показа помощи Директа.
     */
    public const TARGETING_LOCATION_ID = 'TargetingLocationId';

    /**
     * Название региона таргетинга.
     */
    public const TARGETING_LOCATION_NAME = 'TargetingLocationName';

    /**
     * Дата начала недели (понедельник), в формате YYYY-MM-DD.
     */
    public const WEEK = 'Week';

    /**
     * Дата начала года, в формате YYYY-MM-DD.
     */
    public const YEAR = 'Year';
}