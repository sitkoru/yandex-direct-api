<?php


namespace directapi\services\ads\models;

use directapi\components\Model;

class SmartAdBuilderAdGet extends Model
{
    /**
     * @var AdBuilderAdGetItem
     */
    public $Creative;

    public function getDescription(): ?string
    {
        return $this->Creative->getDescription();
    }
}
