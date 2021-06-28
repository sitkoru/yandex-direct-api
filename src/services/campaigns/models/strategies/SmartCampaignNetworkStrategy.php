<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use directapi\services\campaigns\enum\SmartCampaignNetworkStrategyTypeEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class SmartCampaignNetworkStrategy extends Model implements ICallbackValidation
{
    /**
     * @var \directapi\services\campaigns\enum\SmartCampaignNetworkStrategyTypeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\SmartCampaignNetworkStrategyTypeEnum")
     */
    public $BiddingStrategyType;

    /**
     * @var StrategyAverageCpcPerCampaign
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageCpcPerCampaign")
     */
    public $AverageCpcPerCampaign;

    /**
     * @var StrategyAverageCpcPerFilter
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageCpcPerFilter")
     */
    public $AverageCpcPerFilter;

    /**
     * @var StrategyAverageCpaPerCampaign
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageCpaPerCampaign")
     */
    public $AverageCpaPerCampaign;

    /**
     * @var StrategyAverageCpaPerFilter
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageCpaPerFilter")
     */
    public $AverageCpaPerFilter;

    /**
     * @var StrategyAverageRoiAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageRoiAdd")
     */
    public $AverageRoi;

    /**
     * @var StrategyAverageRoiAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageCrrAdd")
     */
    public $AverageCrr;

    /**
     * @var StrategyPayForConversion
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyPayForConversion")
     */
    public $PayForConversionPerCampaign;

    /**
     * @Assert\Callback()
     *
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if ($this->BiddingStrategyType === SmartCampaignNetworkStrategyTypeEnum::AVERAGE_CPC_PER_CAMPAIGN && !$this->AverageCpcPerCampaign) {
            $context->buildViolation('Свойство AverageCpcPerCampaign должно быть указано, если BiddingStrategyType=AVERAGE_CPC_PER_CAMPAIGN')
                ->atPath('AverageCpcPerCampaign')->addViolation();
        }

        if ($this->BiddingStrategyType === SmartCampaignNetworkStrategyTypeEnum::AVERAGE_CPC_PER_FILTER && !$this->AverageCpcPerFilter) {
            $context->buildViolation('Свойство AverageCpcPerFilter должно быть указано, если BiddingStrategyType=AVERAGE_CPC_PER_FILTER')
                ->atPath('AverageCpcPerFilter')->addViolation();
        }

        if ($this->BiddingStrategyType === SmartCampaignNetworkStrategyTypeEnum::AVERAGE_CPA_PER_CAMPAIGN && !$this->AverageCpaPerCampaign) {
            $context->buildViolation('Свойство AverageCpaPerCampaign должно быть указано, если BiddingStrategyType=AVERAGE_CPA_PER_CAMPAIGN')
                ->atPath('AverageCpaPerCampaign')->addViolation();
        }

        if ($this->BiddingStrategyType === SmartCampaignNetworkStrategyTypeEnum::AVERAGE_CPA_PER_FILTER && !$this->AverageCpaPerFilter) {
            $context->buildViolation('Свойство AverageCpaPerFilter должно быть указано, если BiddingStrategyType=AVERAGE_CPA_PER_FILTER')
                ->atPath('AverageCpaPerFilter')->addViolation();
        }

        if ($this->BiddingStrategyType === SmartCampaignNetworkStrategyTypeEnum::AVERAGE_ROI && !$this->AverageRoi) {
            $context->buildViolation('Свойство AverageRoi должно быть указано, если BiddingStrategyType=AVERAGE_ROI')
                ->atPath('AverageRoi')->addViolation();
        }

        if ($this->BiddingStrategyType === SmartCampaignNetworkStrategyTypeEnum::AVERAGE_CRR && !$this->AverageCrr) {
            $context->buildViolation('Свойство AverageCrr должно быть указано, если BiddingStrategyType=AVERAGE_CRR')
                ->atPath('AverageCrr')->addViolation();
        }

        if ($this->BiddingStrategyType === SmartCampaignNetworkStrategyTypeEnum::PAY_FOR_CONVERSION_PER_CAMPAIGN && !$this->PayForConversionPerCampaign) {
            $context->buildViolation('Свойство PayForConversionPerCampaign должно быть указано, если BiddingStrategyType=PAY_FOR_CONVERSION_PER_CAMPAIGN')
                ->atPath('PayForConversionPerCampaign')->addViolation();
        }
    }
}
