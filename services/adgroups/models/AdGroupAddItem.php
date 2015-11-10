<?php

namespace directapi\services\adgroups\models;


use directapi\common\containers\ArrayOfString;
use Symfony\Component\Validator\Constraints as Assert;

class AdGroupAddItem
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 255
     * )
     */
    public $Name;

    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $CampaignId;

    /**
     * @var int[]
     * @Assert\NotBlank()
     */
    public $RegionIds;

    /**
     * @var ArrayOfString
     * @Assert\Valid()
     */
    public $NegativeKeywords;

    /**
     * @var MobileAppAdGroupAdd
     * @Assert\Valid()
     */
    public $MobileAppAdGroup;
}