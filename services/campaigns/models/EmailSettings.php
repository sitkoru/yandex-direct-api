<?php

namespace directapi\services\campaigns\models;


use directapi\common\enum\YesNoEnum;
use Symfony\Component\Validator\Constraints as Assert;

class EmailSettings
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
     * @var YesNoEnum
     */
    public $SendAccountNews;

    /**
     * @var YesNoEnum
     */
    public $SendWarnings;
}