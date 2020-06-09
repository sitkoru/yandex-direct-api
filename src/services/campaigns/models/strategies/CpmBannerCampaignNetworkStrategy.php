<?php


namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use directapi\services\campaigns\enum\CpmBannerCampaignNetworkStrategyTypeEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class CpmBannerCampaignNetworkStrategy extends Model implements ICallbackValidation
{
    /**
     * @var CpmBannerCampaignNetworkStrategyTypeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\CpmBannerCampaignNetworkStrategyTypeEnum")
     */
    public $BiddingStrategyType;

    /**
     * @var StrategyWbMaximumImpressions
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyWbMaximumImpressions")
     */
    public $WbMaximumImpressions;

    /**
     * @var StrategyCpMaximumImpressions
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyCpMaximumImpressions")
     */
    public $CpMaximumImpressions;

    /**
     * @var StrategyWbDecreasedPriceForRepeatedImpressions
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyWbDecreasedPriceForRepeatedImpressions")
     */
    public $WbDecreasedPriceForRepeatedImpressions;

    /**
     * @var StrategyCpDecreasedPriceForRepeatedImpressions
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\strategies\StrategyCpDecreasedPriceForRepeatedImpressions")
     */
    public $CpDecreasedPriceForRepeatedImpressions;

    /**
     * @Assert\Callback()
     *
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if ($this->BiddingStrategyType === CpmBannerCampaignNetworkStrategyTypeEnum::WB_MAXIMUM_IMPRESSIONS && !$this->WbMaximumImpressions) {
            $context->buildViolation('Свойство WbMaximumImpressions должно быть указано, если BiddingStrategyType=WB_MAXIMUM_IMPRESSIONS')
                ->atPath('WbMaximumImpressions')->addViolation();
        }

        if ($this->BiddingStrategyType === CpmBannerCampaignNetworkStrategyTypeEnum::CP_MAXIMUM_IMPRESSIONS && !$this->CpMaximumImpressions) {
            $context->buildViolation('Свойство CpMaximumImpressions должно быть указано, если BiddingStrategyType=CP_MAXIMUM_IMPRESSIONS')
                ->atPath('CpMaximumImpressions')->addViolation();
        }

        if ($this->BiddingStrategyType === CpmBannerCampaignNetworkStrategyTypeEnum::WB_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS && !$this->WbDecreasedPriceForRepeatedImpressions) {
            $context->buildViolation('Свойство WbDecreasedPriceForRepeatedImpressions должно быть указано, если BiddingStrategyType=WB_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS')
                ->atPath('WbDecreasedPriceForRepeatedImpressions')->addViolation();
        }

        if ($this->BiddingStrategyType === CpmBannerCampaignNetworkStrategyTypeEnum::CP_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS && !$this->CpDecreasedPriceForRepeatedImpressions) {
            $context->buildViolation('Свойство CpDecreasedPriceForRepeatedImpressions должно быть указано, если BiddingStrategyType=CP_DECREASED_PRICE_FOR_REPEATED_IMPRESSIONS')
                ->atPath('CpDecreasedPriceForRepeatedImpressions')->addViolation();
        }
    }
}
