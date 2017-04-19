<?php

namespace directapi\services\adimages\models;

use directapi\common\enum\YesNoEnum;
use directapi\components\Model;
use directapi\services\adimages\enum\AdImagesSubtypeEnum;
use directapi\services\adimages\enum\AdImagesTypeEnum;

class AdImagesGetItem extends Model
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
     * @var YesNoEnum
     */
    public $Associated;

    /**
     * @var AdImagesTypeEnum
     */
    public $Type;

    /**
     * @var AdImagesSubtypeEnum
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