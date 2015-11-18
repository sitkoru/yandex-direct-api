<?php

namespace directapi\services\changes\models;


use directapi\components\Model;

class CheckCampaignsResponse extends Model
{
    /**
     * @var CampaignChangesItem[]
     */
    public $Campaigns;

    /**
     * @var string
     */
    public $Timestamp;
}