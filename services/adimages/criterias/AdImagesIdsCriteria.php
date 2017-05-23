<?php

namespace directapi\services\adimages\criterias;

use directapi\components\interfaces\ICriteria;
use directapi\components\Model;

class AdImagesIdsCriteria extends Model implements ICriteria
{
    /**
     * @var string[]
     */
    public $AdImageHashes;
}