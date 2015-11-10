<?php

namespace directapi\services\changes\models;


class CheckCampaignsResponse
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