<?php

namespace directapi\services\adimages\models;

use directapi\common\containers\Base64Binary;
use directapi\components\Model;

class AdImagesAddItem extends Model
{
    /**
     * @var Base64Binary
     * @Assert\NotBlank()
     */
    public $ImageData;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 255
     * )
     */
    public $Name;
}