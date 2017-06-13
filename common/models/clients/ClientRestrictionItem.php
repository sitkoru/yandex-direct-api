<?php

namespace directapi\common\models\clients;


use directapi\components\Model;

class ClientRestrictionItem extends Model
{
    /**
     * @var \directapi\common\enum\clients\ElementEnum
     */
    public $Element;

    /**
     * @var int
     */
    public $Value;
}