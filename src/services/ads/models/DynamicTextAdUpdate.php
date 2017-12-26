<?php

namespace directapi\services\ads\models;


class DynamicTextAdUpdate
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
     * @var \directapi\services\adextensions\models\AdExtensionSetting
     */
    public $CalloutSetting;
}