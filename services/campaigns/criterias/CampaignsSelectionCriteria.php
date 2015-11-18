<?php
namespace directapi\services\campaigns\criterias;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use directapi\services\campaigns\enum\CampaignStateEnum;
use directapi\services\campaigns\enum\CampaignStatusEnum;
use directapi\services\campaigns\enum\CampaignStatusPaymentEnum;
use directapi\services\campaigns\enum\CampaignTypeEnum;
use Symfony\Component\Validator\Constraints as Assert;

class CampaignsSelectionCriteria extends Model
{
    /**
     * @var int[]
     * @Assert\Count(
     *     max=1000
     * )
     */
    public $Ids;

    /**
     * @var CampaignTypeEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\enum\CampaignTypeEnum")
     */
    public $Types;

    /**
     * @var CampaignStateEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\enum\CampaignStateEnum")
     */
    public $States;

    /**
     * @var CampaignStatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\enum\CampaignStatusEnum")
     */
    public $Statuses;

    /**
     * @var CampaignStatusPaymentEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\enum\CampaignStatusPaymentEnum")
     */
    public $StatusesPayment;
}