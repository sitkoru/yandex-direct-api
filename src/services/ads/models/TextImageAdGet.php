<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class TextImageAdGet extends Model
{
    /**
     * @var string
     */
    public $Href;

    /**
     * @var string
     */
    public $AdImageHash;

    public function getDescription()
    {
        $text = $this->Href ?: $this->AdImageHash;
        return "Граф. объявление {$text}";
    }
}