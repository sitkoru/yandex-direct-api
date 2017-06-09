<?php

namespace directapi\services\clients\models;


use directapi\common\enum\YesNoEnum;

class ClientSettingItemGet
{
    /**
     * @var OptionEnum
     */
    public $Option;

    /**
     * @var YesNoEnum
     */
    public $Value;
}