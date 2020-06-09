<?php

namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;
use directapi\services\bidmodifiers\enum\OperatingSystemTypeEnum;
use Symfony\Component\Validator\Constraints as Assert;

class MobileAdjustmentAdd extends Model
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

    /**
     * @var OperatingSystemTypeEnum
     */
    public $OperatingSystemType;
}
