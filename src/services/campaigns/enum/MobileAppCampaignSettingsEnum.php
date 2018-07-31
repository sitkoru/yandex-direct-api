<?php

namespace directapi\services\campaigns\enum;


use directapi\components\Enum;

class MobileAppCampaignSettingsEnum extends Enum
{
    public const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    public const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    public const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    public const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    public const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
}