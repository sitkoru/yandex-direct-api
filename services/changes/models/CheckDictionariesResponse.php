<?php

namespace directapi\services\changes\models;


use directapi\common\enum\YesNoEnum;
use directapi\components\Model;

class CheckDictionariesResponse extends Model
{
    /**
     * @var YesNoEnum
     */
    public $TimeZonesChanged;

    /**
     * @var YesNoEnum
     */
    public $RegionsChanged;

    /**
     * @var string
     */
    public $Timestamp;
}