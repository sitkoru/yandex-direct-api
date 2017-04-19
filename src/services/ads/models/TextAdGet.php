<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class TextAdGet extends Model
{
    /**
     * @var string
     */
    public $Title;

    /**
     * @var string
     */
    public $Text;

    /**
     * @var string
     */
    public $Href;

    /**
     * @var string
     */
    public $DisplayDomain;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Mobile;

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

}