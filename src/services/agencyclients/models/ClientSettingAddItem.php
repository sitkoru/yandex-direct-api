<?php

namespace directapi\services\agencyclients\models;

use directapi\common\enum\YesNoEnum;
use directapi\components\Model;
use directapi\services\agencyclients\enum\ClientSettingAddEnum;
use Symfony\Component\Validator\Constraints as Assert;

class ClientSettingAddItem extends Model
{
    /**
     * @var ClientSettingAddEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\services\agencyclients\enum\ClientSettingAddEnum")
     */
    public $Option;

    /**
     * @var YesNoEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;
}
