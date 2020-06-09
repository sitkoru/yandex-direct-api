<?php

namespace directapi\services\adimages\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class AdImageAddItem extends Model
{
    /**
     * @var \directapi\common\containers\Base64Binary
     * @Assert\NotNull()
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
