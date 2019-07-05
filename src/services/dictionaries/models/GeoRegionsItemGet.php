<?php

namespace directapi\services\dictionaries\models;


use directapi\components\Model;

class GeoRegionsItemGet extends Model
{
    /**
     * @var int
     */
    public $GeoRegionId;

    /**
     * @var string
     */
    public $GeoRegionName;

    /**
     * @var string
     */
    public $GeoRegionType;

    /**
     * @var int
     */
    public $ParentId;
}