<?php

namespace directapi\services\bidmodifiers\models;

use Symfony\Component\Validator\Constraints as Assert;

class BidModifierSetItem
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Id;

    /**
     * @var int
     * @Assert\NotBlank()
     * @Assert\Range(
     *     min=50,
     *     max=1300
     * )
     */
    public $BidModifier;
}