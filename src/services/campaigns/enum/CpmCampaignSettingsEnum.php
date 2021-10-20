<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class CpmCampaignSettingsEnum extends Enum
{
    public const ADD_METRICA_TAG = 'ADD_METRICA_TAG';
    public const ADD_OPENSTAT_TAG = 'ADD_OPENSTAT_TAG';
    public const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    public const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    public const ENABLE_SITE_MONITORING = 'ENABLE_SITE_MONITORING';
    public const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    public const SHARED_ACCOUNT_ENABLED = 'SHARED_ACCOUNT_ENABLED';
    public const DAILY_BUDGET_ALLOWED = 'DAILY_BUDGET_ALLOWED';

    /**
     * @var array
     */
    private static $getOnly = [
        self::SHARED_ACCOUNT_ENABLED,
        self::DAILY_BUDGET_ALLOWED,
    ];

    public static function isGetOnly(CpmCampaignSettingsEnum $value): bool
    {
        if (in_array((string)$value, self::$getOnly, true)) {
            return true;
        }
        return false;
    }
}
