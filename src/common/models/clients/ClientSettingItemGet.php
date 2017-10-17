<?php

namespace directapi\common\models\clients;


use directapi\components\Model;

class ClientSettingItemGet extends Model
{
    /**
     * @var \directapi\common\enum\clients\OptionEnum
     */
    public $Option;

    /**
     * @var \directapi\common\enum\YesNoEnum
     */
    public $Value;
}