<?php

namespace directapi\services\adextensions\models;

use directapi\components\Model;

class AdExtensionGetItem extends Model
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Associated;

    /**
     * @var \directapi\services\adextensions\enum\AdExtensionTypeEnum
     */
    public $Type;

    /**
     * @var Callout
     */
    public $Callout;

    /**
     * @var \directapi\common\enum\StateEnum
     */
    public $State;

    /**
     * @var \directapi\common\enum\StatusEnum
     */
    public $Status;

    /**
     * @var string
     */
    public $StatusClarification;
}
