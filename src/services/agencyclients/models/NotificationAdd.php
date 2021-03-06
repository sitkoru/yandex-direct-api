<?php

namespace directapi\services\agencyclients\models;

use directapi\components\constraints as DirectApiAssert;
use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class NotificationAdd extends Model
{
    /**
     * @var \directapi\common\enum\LangEnum
     * @Assert\NotBlank()
     * @Assert\Type(type="directapi\common\enum\LangEnum")
     */
    public $Lang;

    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    public $Email;

    /**
     * @var EmailSubscriptionItem[]
     * @Assert\NotBlank()
     * @DirectApiAssert\ArrayOf(type="directapi\services\agencyclients\models\EmailSubscriptionItem")
     */
    public $EmailSubscriptions;
}
