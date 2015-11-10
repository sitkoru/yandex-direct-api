<?php

namespace directapi\services\bids\models;

use directapi\common\results\ExceptionNotification;

class BidActionResult
{
    /**
     * @var ExceptionNotification
     */
    public $Warnings;

    /**
     * @var ExceptionNotification
     */
    public $Errors;

    /**
     * @var int
     */
    public $CampaignId;

    /**
     * @var int
     */
    public $AdGroupId;

    /**
     * @var int
     */
    public $KeywordId;
}