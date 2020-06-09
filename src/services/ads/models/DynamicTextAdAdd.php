<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

class DynamicTextAdAdd extends Model
{
    /**
     * @var string
     */
    public $Text;

    /**
     * @var int
     */
    public $VCardId;

    /**
     * @var string
     */
    public $AdImageHash;

    /**
     * @var int
     */
    public $SitelinkSetId;

    /**
     * @var int[]
     */
    public $AdExtensionIds;
}
