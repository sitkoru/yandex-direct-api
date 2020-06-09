<?php

namespace directapi\services\adextensions\models;

use directapi\components\Model;

class AdExtensionSettingItem extends Model
{
    /**
     * @var int
     */
    public $AdExtensionId;

    /**
     * @var \directapi\services\adextensions\enum\AdExtensionOperationTypeEnum
     */
    public $Operation;
}
