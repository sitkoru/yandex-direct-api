<?php

namespace directapi\services\ads\models;


use directapi\common\enum\YesNoEnum;
use directapi\common\enum\YesNoUnknownEnum;
use directapi\services\ads\enum\MobileAppFeatureEnum;

class MobileAppAdFeatureGetItem
{
    /**
     * @var MobileAppFeatureEnum
     */
    public $Feature;

    /**
     * @var YesNoEnum
     */
    public $Enabled;

    /**
     * @var YesNoUnknownEnum
     */
    public $IsAvailable;
}