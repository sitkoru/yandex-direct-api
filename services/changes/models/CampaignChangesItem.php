<?php

namespace directapi\services\changes\models;

use directapi\components\Model;

class CampaignChangesItem extends Model
{
    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var \directapi\services\chanes\enum\CampaignChangesInEnum[]
     */
    public $ChangesIn;
}