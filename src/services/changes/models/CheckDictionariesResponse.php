<?php

namespace directapi\services\changes\models;

use directapi\components\Model;

class CheckDictionariesResponse extends Model
{
    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $TimeZonesChanged;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $RegionsChanged;

    /**
     * @var string
     */
    public $Timestamp;
}
