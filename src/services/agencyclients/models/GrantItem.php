<?php

namespace directapi\services\agencyclients\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class GrantItem extends Model
{
    /**
     * @var \directapi\common\enum\clients\PrivilegeEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\common\enum\clients\PrivilegeEnum")
     */
    public $Privilege;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;
}
