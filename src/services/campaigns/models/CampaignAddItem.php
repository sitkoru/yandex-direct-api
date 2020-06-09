<?php

namespace directapi\services\campaigns\models;

use DateTime;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
use Exception;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class CampaignAddItem extends Model implements ICallbackValidation
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=255
     * )
     */
    public $Name;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $ClientInfo;

    /**
     * @var string
     * @Assert\NotBlank()
     */
    public $StartDate;

    /**
     * @var string
     */
    public $EndDate;

    /**
     * @var TimeTargeting
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\TimeTargeting")
     */
    public $TimeTargeting;

    /**
     * @var string
     */
    public $TimeZone = 'Europe/Moscow';

    /**
     * @var \directapi\common\containers\ArrayOfString
     * @Assert\Valid()
     * @Assert\Type(type="directapi\common\containers\ArrayOfString")
     */
    public $NegativeKeywords;

    /**
     * @var \directapi\common\containers\ArrayOfString
     * @Assert\Valid()
     * @Assert\Type(type="directapi\common\containers\ArrayOfString")
     */
    public $BlockedIps;

    /**
     * @var \directapi\common\containers\ArrayOfString
     * @Assert\Valid()
     * @Assert\Type(type="directapi\common\containers\ArrayOfString")
     */
    public $ExcludedSites;

    /**
     * @var DailyBudget
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\DailyBudget")
     */
    public $DailyBudget;

    /**
     * @var Notification
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\Notification")
     */
    public $Notification;

    /**
     * @var TextCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\TextCampaignItem")
     */
    public $TextCampaign;

    /**
     * @var MobileAppCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\MobileAppCampaignItem")
     */
    public $MobileAppCampaign;

    /**
     * @var DynamicTextCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\DynamicTextCampaignItem")
     */
    public $DynamicTextCampaign;

    /**
     * @var CpmBannerCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\CpmBannerCampaignItem")
     */
    public $CpmBannerCampaign;

    /**
     * @var SmartCampaignItem
     * @Assert\Valid()
     * @Assert\Type(type="directapi\services\campaigns\models\SmartCampaignItem")
     */
    public $SmartCampaign;

    /**
     * @Assert\Callback()
     *
     * @param ExecutionContextInterface $context
     *
     * @throws Exception
     */
    public function isValid(ExecutionContextInterface $context): void
    {
        if (!$this->TextCampaign && !$this->MobileAppCampaign) {
            $context->buildViolation('Необходимо указать либо TextCampaignItem, либо MobileAppCampaignItem')
                ->atPath('TextCampaignItem')
                ->atPath('MobileAppCampaignItem')
                ->addViolation();
        }
        if ($this->TextCampaign && $this->MobileAppCampaign) {
            $context->buildViolation('Можно указать только одно свойство')
                ->atPath('TextCampaignItem')
                ->atPath('MobileAppCampaignItem')
                ->addViolation();
        }
        if ($this->StartDate) {
            $dateTime = new DateTime($this->StartDate);
            $todayTime = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
            if ($dateTime->getTimestamp() < $todayTime) {
                $context->buildViolation('Дата старта кампании не может быть меньше текущей даты')
                    ->atPath('StartDate')
                    ->addViolation();
            }
        }
    }
}
