<?php

namespace directapi\services\dictionaries\enum;

use directapi\components\Enum;

class DictionariesFieldEnum extends Enum
{
    public const CURRENCIES = 'Currencies';
    public const METRO_STATIONS = 'MetroStations';
    public const GEO_REGIONS = 'GeoRegions';
    public const TIME_ZONES = 'TimeZones';
    public const CONSTANTS = 'Constants';
    public const AD_CATEGORIES = 'AdCategories';
    public const OPERATION_SYSTEM_VERSIONS = 'OperationSystemVersions';
    public const SUPPLY_SIDE_PLATFORMS = 'SupplySidePlatforms';
    public const INTERESTS = 'Interests';
    public const AUDIENCE_CRITERIA_TYPES = 'AudienceCriteriaTypes';
    public const AUDIENCE_DEMOGRAPHIC_PROFILES = 'AudienceDemographicProfiles';
    public const AUDIENCE_INTERESTS = 'AudienceInterests';
}