<?php

namespace directapi\services\keywords\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class KeywordUpdateItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Id;

    /**
     * @var string
     * @Assert\Length(
     *     max=4096
     * )
     */
    public $Keyword;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $UserParam1;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $UserParam2;
}