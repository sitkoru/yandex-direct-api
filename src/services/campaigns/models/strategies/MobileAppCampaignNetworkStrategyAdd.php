<?php

namespace directapi\services\campaigns\models\strategies;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use directapi\services\campaigns\enum\MobileAppCampaignNetworkStrategyTypeEnum;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class MobileAppCampaignNetworkStrategyAdd extends Model implements ICallbackValidation
{
    /**
     * @var \directapi\services\campaigns\enum\MobileAppCampaignNetworkStrategyTypeEnum
     * @Assert\NotBlank()
     * @DirectApiAssert\IsEnum(type="directapi\services\campaigns\enum\MobileAppCampaignNetworkStrategyTypeEnum")
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
     */
    public $WbMaximumClicks;

    /**
     * @var StrategyMaximumAppInstallsAdd
     */
    public $WbMaximumAppInstalls;

    /**
     * @var StrategyAverageCpcAdd
     */
    public $AverageCpc;

    /**
     * @var StrategyAverageCpiAdd
     */
    public $AverageCpi;

    /**
     * @var StrategyWeeklyClickPackageAdd
     */
    public $WeeklyClickPackage;

    /**
     * @Assert\Callback()
     *
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if ($this->BiddingStrategyType === MobileAppCampaignNetworkStrategyTypeEnum::WB_MAXIMUM_CLICKS && !$this->WbMaximumClicks) {
            $context->buildViolation('Свойство WbMaximumClicks должно быть указано, если BiddingStrategyType=WB_MAXIMUM_CLICKS')
                ->atPath('WbMaximumClicks')->addViolation();
        }

        if ($this->BiddingStrategyType === MobileAppCampaignNetworkStrategyTypeEnum::WB_MAXIMUM_APP_INSTALLS && !$this->WbMaximumAppInstalls) {
            $context->buildViolation('Свойство WbMaximumAppInstalls должно быть указано, если BiddingStrategyType=WB_MAXIMUM_APP_INSTALLS')
                ->atPath('WbMaximumAppInstalls')->addViolation();
        }

        if ($this->BiddingStrategyType === MobileAppCampaignNetworkStrategyTypeEnum::AVERAGE_CPC && !$this->AverageCpc) {
            $context->buildViolation('Свойство AverageCpc должно быть указано, если BiddingStrategyType=AVERAGE_CPC')
                ->atPath('AverageCpc')->addViolation();
        }

        if ($this->BiddingStrategyType === MobileAppCampaignNetworkStrategyTypeEnum::AVERAGE_CPI && !$this->AverageCpi) {
            $context->buildViolation('Свойство AverageCpi должно быть указано, если BiddingStrategyType=AVERAGE_CPI')
                ->atPath('AverageCpi')->addViolation();
        }

        if ($this->BiddingStrategyType === MobileAppCampaignNetworkStrategyTypeEnum::WEEKLY_CLICK_PACKAGE && !$this->WeeklyClickPackage) {
            $context->buildViolation('Свойство WeeklyClickPackage должно быть указано, если BiddingStrategyType=WEEKLY_CLICK_PACKAGE')
                ->atPath('WeeklyClickPackage')->addViolation();
        }
    }
}
