<?php

namespace directapi\services\clients\models;


use directapi\components\Model;

class ClientRestrictionItem extends Model
{
    /**
     * @var \directapi\services\clients\enum\ElementEnum
     */
    public $Element;

    /**
     * @var int
     */
    public $Value;
}