<?php


namespace directapi\services\ads\models;

use directapi\components\Model;

class TrackingPixelGetItem extends Model implements \JsonSerializable
{
    /**
     * @var string
     */
    public $TrackingPixel;

    /**
     * @var string
     */
    public $Provider;

    public function jsonSerialize()
    {
        return $this->TrackingPixel;
    }
}
