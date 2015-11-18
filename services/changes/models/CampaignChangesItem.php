<?php

namespace directapi\services\changes\models;

use directapi\components\Model;
use directapi\services\chanes\enum\CampaignChangesInEnum;

class CampaignChangesItem extends Model
{
    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var CampaignChangesInEnum[]
     */
    public $ChangesIn;
}