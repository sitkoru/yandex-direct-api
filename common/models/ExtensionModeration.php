<?php

namespace directapi\common\models;

use directapi\common\enum\ModerationStatusEnum;

class ExtensionModeration
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