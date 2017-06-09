<?php

namespace directapi\services\clients\models;


class ClientSettingItemGet
{
    /**
     * @var \directapi\services\clients\enum\OptionEnum
     */
    public $Option;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Value;
}