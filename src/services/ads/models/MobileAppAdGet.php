<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

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
     * @var \directapi\services\ads\enum\MobileAppAdActionEnum
     */
    public $Action;
}