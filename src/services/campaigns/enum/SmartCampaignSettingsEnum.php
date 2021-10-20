<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class SmartCampaignSettingsEnum extends Enum
{
    public const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    public const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    public const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    public const SHARED_ACCOUNT_ENABLED = 'SHARED_ACCOUNT_ENABLED';
    public const DAILY_BUDGET_ALLOWED = 'DAILY_BUDGET_ALLOWED';

    /**
     * @var array
     */
    private static $getOnly = [
        self::SHARED_ACCOUNT_ENABLED,
        self::DAILY_BUDGET_ALLOWED,
        self::ENABLE_AREA_OF_INTEREST_TARGETING,
    ];

    public static function isGetOnly(SmartCampaignSettingsEnum $value): bool
    {
        if (in_array((string)$value, self::$getOnly, true)) {
            return true;
        }
        return false;
    }
}
