<?php

namespace directapi\services\ads\models;

use directapi\common\enum\YesNoEnum;
use directapi\services\ads\enum\MobileAppFeatureEnum;

class MobileAppAdFeatureItem
{
    /**
     * @var MobileAppFeatureEnum
     */
    public $Feature;

    /**
     * @var YesNoEnum
     */
    public $Enabled;
}