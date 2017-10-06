<?php

namespace directapi\services\campaigns\enum;


use directapi\components\Enum;

class TextCampaignSettingsEnum extends Enum
{
    const EXCLUDE_PAUSED_COMPETING_ADS = 'EXCLUDE_PAUSED_COMPETING_ADS';
    const ADD_OPENSTAT_TAG = 'ADD_OPENSTAT_TAG';
    const ADD_METRICA_TAG = 'ADD_METRICA_TAG';
    const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    const ENABLE_SITE_MONITORING = 'ENABLE_SITE_MONITORING';
    const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    const ENABLE_EXTENDED_AD_TITLE = 'ENABLE_EXTENDED_AD_TITLE';
    const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
    const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    const SHARED_ACCOUNT_ENABLED = 'SHARED_ACCOUNT_ENABLED';
    const DAILY_BUDGET_ALLOWED = 'DAILY_BUDGET_ALLOWED';
    const ENABLE_COMPANY_INFO = 'ENABLE_COMPANY_INFO';

    private static $getOnly = [
        self::SHARED_ACCOUNT_ENABLED,
        self::DAILY_BUDGET_ALLOWED
    ];

    public static function isGetOnly(TextCampaignSettingsEnum $value)
    {
        if (in_array((string)$value, self::$getOnly, true)) {
            return true;
        }
        return false;
    }
}