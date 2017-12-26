<?php

namespace directapi\services\adextensions\criterias;


use directapi\components\Model;

class AdExtensionsSelectionCriteria extends Model
{
    /**
     * @var int[]
     */
    public $Ids;

    /**
     * @var \directapi\services\adextensions\enum\AdExtensionTypeEnum[]
     */
    public $Types;

    /**
     * @var \directapi\services\adextensions\enum\AdExtensionStateSelectionEnum[]
     */
    public $States;

    /**
     * @var \directapi\services\adextensions\enum\ExtensionStatusSelectionEnum[]
     */
    public $Statuses;

    /**
     * @var string
     */
    public $ModifiedSince;
}