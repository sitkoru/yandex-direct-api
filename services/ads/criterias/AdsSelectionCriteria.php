<?php

namespace directapi\services\ads\criterias;


use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class AdsSelectionCriteria extends Model
{
    /**
     * @var int[]
     * @Assert\Count(
     *      max = "10000",
     *      min = "1",
     * )
     */
    public $Ids;
    /**
     * @var int[]
     * @Assert\Count(
     *      max = "1000",
     *      min = "1",
     * )
     */
    public $AdGroupIds;
    /**
     * @var int[]
     * @Assert\Count(
     *      max = "10",
     *      min = "1",
     * )
     */
    public $CampaignIds;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\YesNoEnum")
     */
    public $Mobile;

    /**
     * @var \directapi\services\ads\enum\AdTypeEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\ads\enum\AdTypeEnum")
     */
    public $Types;

    /**
     * @var \directapi\common\enum\StateEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\common\enum\StateEnum")
     */
    public $States;

    /**
     * @var \directapi\services\ads\enum\AdStatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\services\ads\enum\AdStatusEnum")
     */
    public $Statuses;

    /**
     * @var int[]
     * @Assert\Count(
     *      max = "50",
     *      min = "1",
     * )
     */
    public $VCardIds;

    /**
     * @var \directapi\common\enum\StatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\common\enum\StatusEnum")
     */
    public $VCardModerationStatuses;

    /**
     * @var int[]
     * @Assert\Count(
     *      max = "50",
     *      min = "1",
     * )
     */
    public $SitelinkSetIds;

    /**
     * @var string[]
     * @Assert\Count(
     *      max = "50",
     *      min = "1",
     * )
     */
    public $AdImageHashes;

    /**
     * @var \directapi\common\enum\StatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\common\enum\StatusEnum")
     */
    public $SitelinksModerationStatuses;

    /**
     * @var \directapi\common\enum\StatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\common\enum\StatusEnum")
     */
    public $AdImageModerationStatuses;
}