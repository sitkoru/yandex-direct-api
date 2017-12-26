<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class AdBuilderAdGetItem extends Model
{
    /**
     * @var int
     */
    public $CreativeId;

    /**
     * @var string
     */
    public $ThumbnailUrl;

    /**
     * @var string
     */
    public $PreviewUrl;

    public function getDescription()
    {
        return "Граф. объявление на основе креатива {$this->CreativeId}";
    }
}