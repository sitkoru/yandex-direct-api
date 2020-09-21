<?php

namespace directapi\services\adgroups\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class AdGroupUpdateItem extends Model
{
    /**
     * @var int
     * @Assert\NotBlank()
     */
    public $Id;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Length(
     *      max = 1024
     * )
     */
    public $Name;

    /**
     * @var int[]
     * @Assert\NotBlank()
     */
    public $RegionIds;

    /**
     * @var \directapi\common\containers\ArrayOfString
     * @Assert\Valid()
     */
    public $NegativeKeywords;

    /**
     * @var \directapi\common\containers\ArrayOfInteger
     */
    public $NegativeKeywordSharedSetIds;

    /**
     * @var string
     * @Assert\Length(
     *      max = 1024
     * )
     */
    public $TrackingParams;

    /**
     * @var MobileAppAdGroupUpdate
     * @Assert\Valid()
     */
    public $MobileAppAdGroup;

    /**
     * @var DynamicTextAdGroupUpdate
     */
    public $DynamicTextAdGroup;

    /**
     * @var SmartAdGroupUpdate
     * @Assert\Valid()
     */
    public $SmartAdGroup;
}
