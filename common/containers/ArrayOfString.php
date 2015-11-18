<?php

namespace directapi\common\containers;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class ArrayOfString extends Model
{
    /**
     * @var string[]
     * @Assert\NotBlank()
     */
    public $Items;
}