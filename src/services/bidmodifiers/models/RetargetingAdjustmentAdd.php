<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class RetargetingAdjustmentAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $RetargetingConditionId;

    /**
     * @var int
     * @Assert\NotBlank()
     * @Assert\Range(
     *      min = 100,
     *      max = 400,
     * )
     */
    public $BidModifier;
}
