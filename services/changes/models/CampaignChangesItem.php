<?php

namespace directapi\services\changes\models;

use directapi\services\chanes\enum\CampaignChangesInEnum;

class CampaignChangesItem
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