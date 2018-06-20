<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class KeywordBidActionResult extends Model
{
    /**
     * @var \directapi\common\results\ExceptionNotification[]
     */
    public $Warnings;

    /**
     * @var \directapi\common\results\ExceptionNotification[]
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