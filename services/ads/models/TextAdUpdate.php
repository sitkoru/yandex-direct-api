<?php

namespace directapi\services\ads\models;


use directapi\services\ads\enum\AgeLabelEnum;

class TextAdUpdate
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
     * @var AgeLabelEnum
     */
    public $AgeLabel;

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