<?php

namespace directapi\services\keywordsResearch\models;

use directapi\components\Model;

class DeduplicateRequestItem extends Model
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var string
     */
    public $Keyword;

    /**
     * @var int
     */
    public $Weight;
}
