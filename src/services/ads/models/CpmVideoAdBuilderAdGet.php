<?php


namespace directapi\services\ads\models;


use directapi\components\Model;

class CpmVideoAdBuilderAdGet extends Model
{
    /**
     * @var AdBuilderAdGetItem
     */
    public $Creative;

    /**
     * @var string
     */
    public $Href;

    /**
     * @var TrackingPixelGetArray
     */
    public $TrackingPixels;

    /**
     * @var int
     */
    public $TurboPageId;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $TurboPageModeration;
}
