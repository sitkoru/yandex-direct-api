<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class MobileAppAdFeatureGetItem extends Model
{
    /**
     * @var \directapi\services\ads\enum\MobileAppFeatureEnum
     */
    public $Feature;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Enabled;

    /**
     * @var \directapi\common\enum\YesNoUnknownEnum
     */
    public $IsAvailable;
}