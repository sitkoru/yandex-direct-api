<?php

namespace directapi\common\models;

use directapi\components\Model;

class ExtensionModeration extends Model
{
    /**
     * @var \directapi\common\enum\ModerationStatusEnum
     */
    public $Status;

    /**
     * @var string
     */
    public $StatusClarification;
}
