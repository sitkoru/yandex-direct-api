<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

class MobileAppAdBuilderAdUpdate extends Model
{
    /**
     * @var AdBuilderAdUpdateItem
     */
    public $Creative;

    /**
     * @var string
     */
    public $TrackingUrl;
}
