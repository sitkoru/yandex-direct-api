<?php

namespace directapi\services\ads\models;

use directapi\components\Model;

class AdExtensionAdGetItem extends Model
{
    /**
     * @var int
     */
    public $AdExtensionId;

    /**
     * @var \directapi\services\adextensions\enum\AdExtensionTypeEnum
     */
    public $Type;

    public function getDescription(): ?string
    {
        return "Расширение {$this->AdExtensionId}";
    }
}
