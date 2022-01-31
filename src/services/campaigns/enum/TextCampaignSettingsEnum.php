<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;

class TextCampaignSettingsEnum extends Enum
{
    public const ADD_METRICA_TAG = 'ADD_METRICA_TAG';
    public const ADD_OPENSTAT_TAG = 'ADD_OPENSTAT_TAG';
    public const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    public const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    public const ENABLE_COMPANY_INFO = 'ENABLE_COMPANY_INFO';
    public const ENABLE_EXTENDED_AD_TITLE = 'ENABLE_EXTENDED_AD_TITLE';
    public const ENABLE_SITE_MONITORING = 'ENABLE_SITE_MONITORING';
    public const EXCLUDE_PAUSED_COMPETING_ADS = 'EXCLUDE_PAUSED_COMPETING_ADS';
    public const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
    public const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    public const SHARED_ACCOUNT_ENABLED = 'SHARED_ACCOUNT_ENABLED';
    public const DAILY_BUDGET_ALLOWED = 'DAILY_BUDGET_ALLOWED';
    public const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    public const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    public const CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED = 'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED';

    /**
     * @var array
     */
    private static $getOnly = [
        self::SHARED_ACCOUNT_ENABLED,
        self::DAILY_BUDGET_ALLOWED,
        self::ENABLE_BEHAVIORAL_TARGETING,
        self::ENABLE_AUTOFOCUS,
        self::CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED
    ];

    public static function isGetOnly(TextCampaignSettingsEnum $value): bool
    {
        if (\in_array((string)$value, self::$getOnly, true)) {
            return true;
        }
        return false;
    }

    public static function checkValue(TextCampaignSettingsEnum $value)
    {
        if ($value == self::MAINTAIN_NETWORK_CPC) {
            throw new \Exception(self::MAINTAIN_NETWORK_CPC . " is deprecated");
        }
    }
}
