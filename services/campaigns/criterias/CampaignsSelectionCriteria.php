<?php
namespace directapi\services\campaigns\criterias;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
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
     * @var \directapi\services\campaigns\enum\CampaignTypeEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\enum\CampaignTypeEnum")
     */
    public $Types;

    /**
     * @var \directapi\services\campaigns\enum\CampaignStateEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\enum\CampaignStateEnum")
     */
    public $States;

    /**
     * @var \directapi\services\campaigns\enum\CampaignStatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\enum\CampaignStatusEnum")
     */
    public $Statuses;

    /**
     * @var \directapi\services\campaigns\enum\CampaignStatusPaymentEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\campaigns\enum\CampaignStatusPaymentEnum")
     */
    public $StatusesPayment;
}