<?php

namespace directapi\services\campaigns\enum;

use directapi\components\Enum;
use directapi\exceptions\DirectApiException;

class MobileAppCampaignSettingsEnum extends Enum
{
    public const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    public const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    public const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    public const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
    public const ENABLE_AREA_OF_INTEREST_TARGETING = 'ENABLE_AREA_OF_INTEREST_TARGETING';
    public const SHARED_ACCOUNT_ENABLED = 'SHARED_ACCOUNT_ENABLED';
    public const DAILY_BUDGET_ALLOWED = 'DAILY_BUDGET_ALLOWED';
    public const CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED = 'CAMPAIGN_EXACT_PHRASE_MATCHING_ENABLED';

    /**
     * @var array
     */
    private static $getOnly = [
        self::ENABLE_AUTOFOCUS,
        self::MAINTAIN_NETWORK_CPC,
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

    /**
     * @throws \Exception
     */
    public static function checkValue(MobileAppCampaignSettingsEnum $value)
    {
        if ($value == self::MAINTAIN_NETWORK_CPC) {
            throw new DirectApiException(self::MAINTAIN_NETWORK_CPC . " is deprecated");
        }
    }
}
