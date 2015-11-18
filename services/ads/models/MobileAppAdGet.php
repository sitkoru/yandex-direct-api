<?php

namespace directapi\services\ads\models;

use directapi\components\Model;
use directapi\services\ads\enum\MobileAppAdActionEnum;

class MobileAppAdGet extends Model
{
    /**
     * @var string
     */
    public $Title;

    /**
     * @var string
     */
    public $Text;

    /**
     * @var MobileAppAdFeatureGetItem[]
     */
    public $Features;

    /**
     * @var string
     */
    public $TrackingUrl;

    /**
     * @var MobileAppAdActionEnum
     */
    public $Action;
}