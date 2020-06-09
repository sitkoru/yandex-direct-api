<?php

namespace directapi\services\dictionaries\models;

use directapi\components\Model;

class TimeZonesItemGet extends Model
{
    /**
     * @var string
     */
    public $TimeZone;

    /**
     * @var string
     */
    public $TimeZoneName;

    /**
     * @var int
     */
    public $UtcOffset;
}
