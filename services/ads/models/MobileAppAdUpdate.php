<?php

namespace directapi\services\ads\models;


use directapi\services\ads\enum\AgeLabelEnum;
use directapi\services\ads\enum\MobileAppAdActionEnum;

class MobileAppAdUpdate
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
     * @var string
     */
    public $TrackingUrl;

    /**
     * @var MobileAppAdFeatureItem
     */
    public $Features;

    /**
     * @var AgeLabelEnum
     */
    public $AgeLabel;

    /**
     * @var MobileAppAdActionEnum
     */
    public $Action;
}