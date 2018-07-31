<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class MobileAppAdBuilderAdGet extends Model
{
    /**
     * @var AdBuilderAdGetItem
     */
    public $Creative;

    /**
     * @var string
     */
    public $TrackingUrl;

    public function getDescription(): ?string
    {
        return $this->Creative->getDescription();
    }
}