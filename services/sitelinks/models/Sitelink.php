<?php

namespace directapi\services\sitelinks\models;

use directapi\components\constraints as DirectApiAssert;
use Symfony\Component\Validator\Constraints as Assert;

class Sitelink
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=30
     * )
     */
    public $Title;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=1024
     * )
     */
    public $Href;

    /**
     * @var string
     * @Assert\Length(
     *     max=60
     * )
     */
    public $Description;
}