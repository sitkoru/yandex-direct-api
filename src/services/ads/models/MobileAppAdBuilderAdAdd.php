<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class MobileAppAdBuilderAdAdd extends Model
{
    /**
     * @var AdBuilderAdAddItem
     */
    public $Creative;

    /**
     * @var string
     */
    public $TrackingUrl;
}