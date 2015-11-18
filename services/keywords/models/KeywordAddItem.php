<?php

namespace directapi\keywords\models;

use directapi\common\enum\PriorityEnum;
use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class KeywordAddItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $AdGroupId;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *     max=4096
     * )
     */
    public $Keyword;

    /**
     * @var int
     */
    public $Bid;

    /**
     * @var int
     */
    public $ContextBid;

    /**
     * @var PriorityEnum
     * @DirectApiAssert\IsEnum(type="directapi\common\enum\PriorityEnum")
     */
    public $StrategyPriority;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $UserParam1;

    /**
     * @var string
     * @Assert\Length(
     *     max=255
     * )
     */
    public $UserParam2;
}