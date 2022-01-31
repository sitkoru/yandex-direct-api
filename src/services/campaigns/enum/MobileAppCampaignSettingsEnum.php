<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class MobileAppCampaignSettingsEnum extends Enum
{
    public const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    public const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    public const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    public const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    public const SHARED_ACCOUNT_ENABLED = 'SHARED_ACCOUNT_ENABLED';
    public const DAILY_BUDGET_ALLOWED = 'DAILY_BUDGET_ALLOWED';
    public const CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED = 'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED';

    /**
     * @var array
     */
    private static $getOnly = [
        self::ENABLE_AUTOFOCUS,
        self::SHARED_ACCOUNT_ENABLED,
        self::DAILY_BUDGET_ALLOWED,
        self::CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED
    ];

    public static function isGetOnly(MobileAppCampaignSettingsEnum $value): bool
    {
        if (\in_array((string)$value, self::$getOnly, true)) {
            return true;
        }
        return false;
    }
}
