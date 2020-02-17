<?php

namespace directapi\services\agencyclients\models;

use directapi\common\enum\clients\PrivilegeEnum;
use directapi\common\enum\YesNoEnum;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class GrantItem extends Model
{
    /**
     * @var PrivilegeEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\common\enum\clients\PrivilegeEnum")
     */
    public $Privilege;

    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;
}
