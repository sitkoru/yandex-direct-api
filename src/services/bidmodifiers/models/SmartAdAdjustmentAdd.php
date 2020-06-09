<?php


namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class SmartAdAdjustmentAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $BidModifier;
}
