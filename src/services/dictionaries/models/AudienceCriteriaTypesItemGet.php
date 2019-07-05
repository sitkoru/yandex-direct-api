<?php

namespace directapi\services\dictionaries\models;


use directapi\components\Model;
use directapi\services\dictionaries\enum\CanSelectEnum;

class AudienceCriteriaTypesItemGet extends Model
{
    /**
     * @var string
     */
    public $Type;

    /**
     * @var string
     */
    public $BlockElement;

    /**
     * @var string
     */
    public $Name;

    /**
     * @var string
     */
    public $Description;

    /**
     * @var CanSelectEnum[]
     */
    public $CanSelect;
}