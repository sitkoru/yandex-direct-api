<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class DynamicTextAdGet extends Model
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
     * @var int
     */
    public $SitelinkSetId;

    /**
     * @var string
     */
    public $AdImageHash;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $VCardModeration;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $SitelinksModeration;

    /**
     * @var \directapi\common\models\ExtensionModeration
     */
    public $AdImageModeration;

    /**
     * @var AdExtensionAdGetItem
     */
    public $AdExtensions;

    public function getDescription(): ?string
    {
        return $this->Text;
    }
}