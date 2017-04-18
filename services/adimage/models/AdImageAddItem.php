<?php

use directapi\common\containers\Base64Binary;
use directapi\components\Model;

class AdImageAddItem extends Model
{
    /**
     * @var base64Binary
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