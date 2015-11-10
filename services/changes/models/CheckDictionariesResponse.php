<?php

namespace directapi\services\changes\models;


use directapi\common\enum\YesNoEnum;

class CheckDictionariesResponse
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