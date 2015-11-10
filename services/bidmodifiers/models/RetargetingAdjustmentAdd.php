<?php

namespace directapi\services\bidmodifiers\models;

use Symfony\Component\Validator\Constraints as Assert;

class RetargetingAdjustmentAdd
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $RetargetingConditionId;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $BidModifier;
}