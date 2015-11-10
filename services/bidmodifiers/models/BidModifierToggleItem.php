<?php

namespace directapi\services\bidmodifiers\models;


use directapi\common\enum\YesNoEnum;
use directapi\services\bidmodifiers\enum\BidModifierTypeEnum;

class BidModifierToggleItem
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
     * @var BidModifierTypeEnum
     */
    public $Type;

    /**
     * @var YesNoEnum
     */
    public $Enabled;
}