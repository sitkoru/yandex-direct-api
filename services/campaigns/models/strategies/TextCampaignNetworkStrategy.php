<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use directapi\services\campaigns\enum\TextCampaignNetworkStrategyTypeEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class TextCampaignNetworkStrategy extends Model implements ICallbackValidation
{
    /**
     * @var \directapi\services\campaigns\enum\TextCampaignNetworkStrategyTypeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\TextCampaignNetworkStrategyTypeEnum")
     */
    public $BiddingStrategyType;

    /**
     * @var StrategyNetworkDefaultAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyNetworkDefaultAdd")
     */
    public $NetworkDefault;

    /**
     * @var StrategyMaximumClicksAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyMaximumClicksAdd")
     */
    public $WbMaximumClicks;

    /**
     * @var StrategyMaximumConversionRateAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyMaximumConversionRateAdd")
     */
    public $WbMaximumConversionRate;

    /**
     * @var StrategyAverageCpcAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageCpcAdd")
     */
    public $AverageCpc;

    /**
     * @var StrategyAverageCpaAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageCpaAdd")
     */
    public $AverageCpa;

    /**
     * @var StrategyAverageRoiAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyAverageRoiAdd")
     */
    public $AverageRoi;

    /**
     * @var StrategyWeeklyClickPackageAdd
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyWeeklyClickPackageAdd")
     */
    public $WeeklyClickPackage;

    /**
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
    {
        if ($this->BiddingStrategyType == TextCampaignNetworkStrategyTypeEnum::WB_MAXIMUM_CLICKS && !$this->WbMaximumClicks) {
            $context->buildViolation("Свойство WbMaximumClicks должно быть указано, если BiddingStrategyType=WB_MAXIMUM_CLICKS")
                ->atPath("WbMaximumClicks")->addViolation();
        }

        if ($this->BiddingStrategyType == TextCampaignNetworkStrategyTypeEnum::WB_MAXIMUM_CONVERSION_RATE && !$this->WbMaximumConversionRate) {
            $context->buildViolation("Свойство WbMaximumConversionRate должно быть указано, если BiddingStrategyType=WB_MAXIMUM_CONVERSION_RATE")
                ->atPath("WbMaximumConversionRate")->addViolation();
        }

        if ($this->BiddingStrategyType == TextCampaignNetworkStrategyTypeEnum::AVERAGE_CPC && !$this->AverageCpc) {
            $context->buildViolation("Свойство AverageCpc должно быть указано, если BiddingStrategyType=AVERAGE_CPC")
                ->atPath("AverageCpc")->addViolation();
        }

        if ($this->BiddingStrategyType == TextCampaignNetworkStrategyTypeEnum::AVERAGE_CPA && !$this->AverageCpa) {
            $context->buildViolation("Свойство AverageCpc должно быть указано, если BiddingStrategyType=AVERAGE_CPA")
                ->atPath("AverageCpa")->addViolation();
        }

        if ($this->BiddingStrategyType == TextCampaignNetworkStrategyTypeEnum::AVERAGE_ROI && !$this->AverageRoi) {
            $context->buildViolation("Свойство AverageRoi должно быть указано, если BiddingStrategyType=AVERAGE_ROI")
                ->atPath("AverageRoi")->addViolation();
        }

        if ($this->BiddingStrategyType == TextCampaignNetworkStrategyTypeEnum::WEEKLY_CLICK_PACKAGE && !$this->WeeklyClickPackage) {
            $context->buildViolation("Свойство WeeklyClickPackage должно быть указано, если BiddingStrategyType=WEEKLY_CLICK_PACKAGE")
                ->atPath("WeeklyClickPackage")->addViolation();
        }
    }
}
