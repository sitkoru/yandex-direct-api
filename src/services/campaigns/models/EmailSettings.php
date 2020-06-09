<?php

namespace directapi\services\campaigns\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class EmailSettings extends Model
{
    /**
     * @var string
     * @Assert\Email()
     */
    public $Email;

    /**
     * @var int
     */
    public $CheckPositionInterval;

    /**
     * @var int
     * @Assert\Range(
     *     min=1,
     *     max=50
     * )
     */
    public $WarningBalance;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $SendAccountNews;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $SendWarnings;
}
