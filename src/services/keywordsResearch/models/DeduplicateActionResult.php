<?php

namespace directapi\services\keywordsResearch\models;

use directapi\components\Model;

class DeduplicateActionResult extends Model
{
    /**
     * @var DeduplicateResponseAddItem[]
     */
    public $Add;

    /**
     * @var DeduplicateResponseUpdateItem[]
     */
    public $Update;

    /**
     * @var \directapi\common\criterias\IdsCriteria
     */
    public $Delete;

    /**
     * @var DeduplicateErrorItem[]
     */
    public $Failure;
}
