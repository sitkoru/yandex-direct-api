<?php

namespace directapi\services\clients\models;


use directapi\components\Model;
use directapi\services\clients\enum\ElementEnum;

class ClientRestrictionItem extends Model
{
    /**
     * @var ElementEnum
     */
    public $Element;

    /**
     * @var int
     */
    public $Value;
}