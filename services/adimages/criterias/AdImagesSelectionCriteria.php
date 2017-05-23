<?php

namespace directapi\services\adimages\criterias;

use directapi\common\enum\YesNoEnum;

class AdImagesSelectionCriteria
{
    /**
     * @var string[]
     */
    public $AdImageHashes;

    /**
     * @var YesNoEnum
     */
    public $Associated;
}