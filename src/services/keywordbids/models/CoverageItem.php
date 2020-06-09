<?php

namespace directapi\services\keywordbids\models;

use directapi\components\Model;
use Symfony\Component\Validator\Constraints as Assert;

class CoverageItem extends Model
{
    /**
     * @Assert\Valid()
     *
     * @var NetworkCoverageItem[]
     */
    public $CoverageItems;
}
