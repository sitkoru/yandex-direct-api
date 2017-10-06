<?php

namespace directapi\services\adimages\models;

use directapi\components\Model;

class AdImageGetItem extends Model
{
    /**
     * @var string
     */
    public $AdImageHash;

    /**
     * @var string
     * @Assert\Length(
     *      max = 255
     * )
     */
    public $Name;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Associated;

    /**
     * @var \directapi\services\adimages\enum\AdImageTypeEnum
     */
    public $Type;

    /**
     * @var \directapi\services\adimages\enum\AdImageSubtypeEnum
     */
    public $Subtype;

    /**
     * @var string
     */
    public $OriginalUrl;

    /**
     * @var string
     */
    public $PreviewUrl;
}