<?php

namespace directapi\common\models;

use directapi\common\enum\ModerationStatusEnum;
use directapi\components\Model;

class ExtensionModeration extends Model
{
    /**
     * @var ModerationStatusEnum
     */
    public $Status;
    /**
     * @var string
     */
    public $StatusClarification;
}