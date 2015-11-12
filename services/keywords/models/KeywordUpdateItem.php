<?php

namespace directapi\keywords\models;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class KeywordUpdateItem
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