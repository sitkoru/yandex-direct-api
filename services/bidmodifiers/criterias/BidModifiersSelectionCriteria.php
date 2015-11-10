<?php

namespace directapi\services\bidmodifiers\criterias;


use directapi\services\bidmodifiers\enum\BidModifierLevelEnum;
use directapi\services\bidmodifiers\enum\BidModifierTypeEnum;

class BidModifiersSelectionCriteria
{
    /**
     * @var int[]
     */
    public $CampaignIds;

    /**
     * @var int[]
     */
    public $AdGroupIds;

    /**
     * @var int[]
     */
    public $Ids;

    /**
     * @var BidModifierTypeEnum[]
     */
    public $Types;

    /**
     * @var BidModifierLevelEnum[]
     */
    public $Levels;
}