<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class MobileAppImageAdGet extends Model
{
    /**
     * @var string
     */
    public $TrackingUrl;

    /**
     * @var string
     */
    public $AdImageHash;

    public function getDescription(): ?string
    {
        return "Граф. объявление: {$this->AdImageHash}";
    }
}