<?php

namespace directapi\services\keywordbids\models;


use directapi\components\Model;

class CoverageItem extends Model
{
    /**
     * @Assert\Valid()
     * @var NetworkCoverageItem[]
     */
    public $CoverageItems;
}