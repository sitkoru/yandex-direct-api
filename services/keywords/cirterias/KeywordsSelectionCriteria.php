<?php

namespace directapi\services\keywords\criterias;


use directapi\common\enum\StateEnum;
use directapi\common\enum\StatusEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class KeywordsSelectionCriteria extends Model
{
    /**
     * @var int[]
     * @Assert\Count(
     *     min=1,
     *     max=10000
     * )
     */
    public $Ids;

    /**
     * @var int[]
     * @Assert\Count(
     *     min=1,
     *     max=1000
     * )
     */
    public $AdGroupIds;

    /**
     * @var int[]
     * @Assert\Count(
     *     min=1,
     *     max=10
     * )
     */
    public $CampaignIds;

    /**
     * @var StateEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\common\enum\StateEnum")
     */
    public $States;

    /**
     * @var StatusEnum[]
     * @DirectApiAssert\ArrayOf(type="directapi\common\enum\StatusEnum")
     */
    public $Statuses;
}