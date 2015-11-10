<?php

namespace directapi\services\keywords\criterias;


use directapi\common\enum\StateEnum;
use directapi\common\enum\StatusEnum;

class KeywordsSelectionCriteria
{
    /**
     * @var int[]
     */
    public $Ids;

    /**
     * @var int[]
     */
    public $AdGroupIds;

    /**
     * @var int[]
     */
    public $CampaignIds;

    /**
     * @var StateEnum[]
     */
    public $States;

    /**
     * @var StatusEnum[]
     */
    public $Statuses;
}