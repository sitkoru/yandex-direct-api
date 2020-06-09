<?php

namespace directapi\services\bidmodifiers\results;

class ToggleResult
{
    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var \directapi\services\bidmodifiers\enum\BidModifierTypeEnum
     */
    public $Type;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Enabled;
}
