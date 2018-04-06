<?php

namespace directapi\services\adextensions\models;

use directapi\components\Model;

class VideoExtensionGetItem extends Model
{
    /**
     * @var int
     */
    public $CreativeId;

    /**
     * @var \directapi\common\enum\StatusEnum
     */
    public $Status;

    /**
     * @var string
     */
    public $ThumbnailUrl;

    /**
     * @var string
     */
    public $PreviewUrl;
}