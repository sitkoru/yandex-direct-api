<?php

namespace directapi\services\ads\models;


use directapi\common\enum\YesNoEnum;
use directapi\common\models\ExtensionModeration;

class TextAdGet
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
     * @var YesNoEnum
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
     * @var ExtensionModeration
     */
    public $VCardModeration;

    /**
     * @var ExtensionModeration
     */
    public $SitelinksModeration;

    /**
     * @var ExtensionModeration
     */
    public $AdImageModeration;

}