<?php

namespace directapi\services\bidmodifiers\enum;

use directapi\components\Enum;

class BidModifierFieldEnum extends Enum
{
    public const ID = 'Id';
    public const CAMPAIGN_ID = 'CampaignId';
    public const AD_GROUP_ID = 'AdGroupId';
    public const LEVEL = 'Level';
    public const TYPE = 'Type';
}
