<?php

namespace directapi\services\changes\models;

use directapi\components\Model;

class CheckResponseIds extends Model
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
}
