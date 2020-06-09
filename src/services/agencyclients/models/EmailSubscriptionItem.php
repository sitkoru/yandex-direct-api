<?php

namespace directapi\services\agencyclients\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class EmailSubscriptionItem extends Model
{
    /**
     * @var \directapi\services\agencyclients\enum\EmailSubscriptionEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\services\agencyclients\enum\EmailSubscriptionEnum")
     */
    public $Option;

    /**
     * @var \directapi\common\enum\YesNoEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\common\enum\YesNoEnum")
     */
    public $Value;
}
