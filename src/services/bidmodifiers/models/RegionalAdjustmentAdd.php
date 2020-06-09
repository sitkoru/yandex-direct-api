<?php


namespace directapi\services\bidmodifiers\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class RegionalAdjustmentAdd extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $RegionId;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $BidModifier;
}
