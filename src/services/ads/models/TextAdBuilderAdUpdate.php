<?php

namespace directapi\services\ads\models;


use directapi\components\Model;

class TextAdBuilderAdUpdate extends Model
{
    /**
     * @var AdBuilderAdUpdateItem
     */
    public $Creative;

    /**
     * @var string
     */
    public $Href;
}