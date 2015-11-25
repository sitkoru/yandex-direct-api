<?php

namespace directapi\services\bids\models;

use directapi\components\Model;

class BidActionResult extends Model
{
    /**
     * @var \directapi\common\results\ExceptionNotification
     */
    public $Warnings;

    /**
     * @var \directapi\common\results\ExceptionNotification
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