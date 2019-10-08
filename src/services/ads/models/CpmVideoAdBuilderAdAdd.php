<?php


namespace directapi\services\ads\models;


use directapi\components\Model;

class CpmVideoAdBuilderAdAdd extends Model
{
    /**
     * @var AdBuilderAdAddItem
     */
    public $Creative;

    /**
     * @var string
     */
    public $Href;

    /**
     * @var \directapi\common\containers\ArrayOfString
     */
    public $TrackingPixels;

    /**
     * @var int
     */
    public $TurboPageId;
}
