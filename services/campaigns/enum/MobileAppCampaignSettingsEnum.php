<?php

namespace directapi\services\campaigns\enum;


use directapi\components\Enum;

class MobileAppCampaignSettingsEnum extends Enum
{
    const ADD_TO_FAVORITES = 'ADD_TO_FAVORITES';
    const ENABLE_BEHAVIORAL_TARGETING = 'ENABLE_BEHAVIORAL_TARGETING';
    const ENABLE_AUTOFOCUS = 'ENABLE_AUTOFOCUS';
    const REQUIRE_SERVICING = 'REQUIRE_SERVICING';
    const MAINTAIN_NETWORK_CPC = 'MAINTAIN_NETWORK_CPC';
}