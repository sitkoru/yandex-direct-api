<?php

namespace directapi\services\campaigns\models;


use directapi\common\containers\ArrayOfString;
use directapi\components\interfaces\ICallbackValidation;
use directapi\components\Model;
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
     * @var ArrayOfString
     * @Assert\Valid()
     * @Assert\Type(type="directapi\common\containers\ArrayOfString")
     */
    public $NegativeKeywords;

    /**
     * @var ArrayOfString
     * @Assert\Valid()
     * @Assert\Type(type="directapi\common\containers\ArrayOfString")
     */
    public $BlockedIps;

    /**
     * @var ArrayOfString
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
     * @Assert\Callback()
     * @param ExecutionContextInterface $context
     */
    public function isValid(ExecutionContextInterface $context)
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
    }
}