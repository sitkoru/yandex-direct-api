<?php

namespace directapi\services\reports\models;

class ReportRow
{
    /**
     * @var string Формат показа объявления
     */
    public $AdFormat;

    /**
     * @var int Идентификатор группы объявлений.
     */
    public $AdGroupId;

    /**
     * @var string Название группы объявлений.
     */
    public $AdGroupName;

    /**
     * @var int Идентификатор объявления.
     */
    public $AdId;

    /**
     * @var string Тип площадки, где показано объявление
     */
    public $AdNetworkType;

    /**
     * @var string Возрастная группа пользователя
     */
    public $Age;

    /**
     * @var float Средняя позиция, на которой произошел клик по объявлению.
     */
    public $AvgClickPosition;

    /**
     * @var float Средняя стоимость клика.
     */
    public $AvgCpc;

    /**
     * @var float Средняя позиция показа объявления.
     */
    public $AvgImpressionPosition;

    /**
     * @var float Средняя глубина просмотра сайта, то есть количество просмотренных страниц (по данным Яндекс.Метрики).
     */
    public $AvgPageviews;

    /**
     * @var float Средний объем трафика с позиций, на которых были показы объявления.
     */
    public $AvgTrafficVolume;

    /**
     * @var float Доля отказов в общем количестве визитов, в процентах (по данным Яндекс.Метрики).
     */
    public $BounceRate;

    /**
     * @var int Количество отказов (по данным Яндекс.Метрики).
     */
    public $Bounces;

    /**
     * @var int Идентификатор кампании.
     */
    public $CampaignId;

    /**
     * @var string Название кампании.
     */
    public $CampaignName;

    /**
     * @var string Тип кампании
     */
    public $CampaignType;

    /**
     * @var string Тип связи
     */
    public $CarrierType;

    /**
     * @var int Количество кликов.
     */
    public $Clicks;

    /**
     * @var string По какой части объявления кликнул пользователь
     */
    public $ClickType;

    /**
     * @var int Количество целевых визитов (конверсий) (по данным Яндекс.Метрики).
     */
    public $Conversions;

    /**
     * @var float Доля целевых визитов в общем количестве визитов, в процентах (по данным Яндекс.Метрики).
     */
    public $ConversionRate;

    /**
     * @var double Стоимость кликов.
     */
    public $Cost;

    /**
     * @var double Средняя стоимость целевого визита (по данным Яндекс.Метрики)
     */
    public $CostPerConversion;

    /**
     * @var string Название условия показа
     */
    public $Criteria;

    /**
     * @var int Идентификатор условия показа
     */
    public $CriteriaId;

    /**
     * @var string Тип условия показа
     */
    public $CriteriaType;

    /**
     * @var string Название или текст условия показа, заданного рекламодателем
     */
    public $Criterion;

    /**
     * @var string Идентификатор условия показа, заданного рекламодателем
     */
    public $CriterionId;

    /**
     * @var string Тип условия показа, заданного рекламодателем
     */
    public $CriterionType;

    /**
     * @var float CTR, в процентах
     */
    public $Ctr;

    /**
     * @var string Дата, за которую приведена статистика, в формате YYYY-MM-DD.
     */
    public $Date;

    /**
     * @var string Тип устройства, на котором было показано объявление: DESKTOP, MOBILE или TABLET.
     */
    public $Device;

    /**
     * @var string Наименование внешней сети (SSP).
     */
    public $ExternalNetworkName;

    /**
     * @var string Пол пользователя
     */
    public $Gender;

    /**
     * @var float Рентабельность инвестиций в рекламу, до двух знаков после запятой (по данным Яндекс.Метрики)
     */
    public $GoalsRoi;

    /**
     * @var int Количество показов.
     */
    public $Impressions;

    /**
     * @var float Доля выигранных аукционов в общем количестве аукционов, в которых участвовали рекламные материалы,
     *            в процентах. Данные доступны только для смарт-баннеров.
     */
    public $ImpressionShare;

    /**
     * @var int Идентификатор региона местонахождения пользователя.
     */
    public $LocationOfPresenceId;

    /**
     * @var string Название региона местонахождения пользователя.
     */
    public $LocationOfPresenceName;

    /**
     * @var string Тип соответствия ключевой фразе
     */
    public $MatchType;

    /**
     * @var string Тип операционной системы
     */
    public $MobilePlatform;

    /**
     * @var string Дата начала месяца, в формате YYYY-MM-DD.
     */
    public $Month;

    /**
     * @var string Название площадки показов.
     */
    public $Placement;

    /**
     * @var string Дата начала квартала, в формате YYYY-MM-DD.
     */
    public $Quarter;

    /**
     * @var string Поисковый запрос, по которому было показано объявление.
     */
    public $Query;

    /**
     * @var double Доход (по данным Яндекс.Метрики).
     */
    public $Revenue;

    /**
     * @var int Идентификатор условия подбора аудитории,
     *          в соответствии с которым применена корректировка ставок для посетивших сайт.
     */
    public $RlAdjustmentId;

    /**
     * @var int Количество визитов (по данным Яндекс.Метрики).
     */
    public $Sessions;

    /**
     * @var string Блок показа объявления
     */
    public $Slot;

    /**
     * @var int Идентификатор региона таргетинга.
     *          В случае использования расширенного геотаргетинга может отличаться от региона местонахождения пользователя
     */
    public $TargetingLocationId;

    /**
     * @var string Название региона таргетинга.
     */
    public $TargetingLocationName;

    /**
     * @var string Дата начала недели (понедельник), в формате YYYY-MM-DD.
     */
    public $Week;

    /**
     * @var string Дата начала года, в формате YYYY-MM-DD.
     */
    public $Year;
}
