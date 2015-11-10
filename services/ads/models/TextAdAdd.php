<?php

namespace directapi\services\ads\models;


use directapi\common\enum\YesNoEnum;

class TextAdAdd
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
     * @var YesNoEnum
     */
    public $Mobile;

    /**
     * @var string
     */
    public $Href;

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
}