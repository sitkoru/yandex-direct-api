<?php

namespace directapi\services\bids\models;

use directapi\common\results\ExceptionNotification;
use directapi\components\Model;

class BidActionResult extends Model
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