<?php

namespace directapi\services\bidmodifiers\models;

use Symfony\Component\Validator\Constraints as Assert;

class MobileAdjustmentAdd
{
    /**
     * @var int
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 50,
     *      max = 1300,
     * )
     */
    public $BidModifier;
}