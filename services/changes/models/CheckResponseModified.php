<?php

namespace directapi\services\changes\models;


class CheckResponseModified
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
    public $AdIds;

    /**
     * @var CampaignStatItem[]
     */
    public $CampaignsStat;
}