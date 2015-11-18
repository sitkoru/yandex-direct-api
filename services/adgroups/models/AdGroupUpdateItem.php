<?php

namespace directapi\services\adgroups\models;

use directapi\common\containers\ArrayOfString;
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
     * @var ArrayOfString
     * @Assert\Valid()
     */
    public $NegativeKeywords;

    /**
     * @var MobileAppAdGroupUpdate
     * @Assert\Valid()
     */
    public $MobileAppAdGroup;
}