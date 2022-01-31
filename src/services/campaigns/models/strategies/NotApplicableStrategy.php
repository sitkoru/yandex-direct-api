<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class NotApplicableStrategy extends Model
{
    /**
     * @var \directapi\services\campaigns\enum\NotApplicableStrategyTypeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\NotApplicableStrategyTypeEnum")
     */
    public $BiddingStrategyType;


}
