<?php

namespace directapi\services\ads\models;


use directapi\common\enum\YesNoEnum;
use directapi\common\enum\YesNoUnknownEnum;
use directapi\components\Model;
use directapi\services\ads\enum\MobileAppFeatureEnum;

class MobileAppAdFeatureGetItem extends Model
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