<?php

namespace directapi\services\dictionaries\models;

use directapi\components\Model;

class AudienceInterestsItemGet extends Model
{
    /**
     * @var int
     */
    public $InterestKey;

    /**
     * @var int
     */
    public $Id;

    /**
     * @var int
     */
    public $ParentId;

    /**
     * @var string
     */
    public $Name;

    /**
     * @var string
     */
    public $Description;

    /**
     * @var \directapi\services\dictionaries\enum\InterestTypeEnum[]
     */
    public $InterestType;
}
