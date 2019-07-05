<?php

namespace directapi\services\dictionaries\models;


use directapi\components\Model;

class MetroStationsItemGet extends Model
{
    /**
     * @var int
     */
    public $GeoRegionId;

    /**
     * @var int
     */
    public $MetroStationId;

    /**
     * @var string
     */
    public $MetroStationName;
}