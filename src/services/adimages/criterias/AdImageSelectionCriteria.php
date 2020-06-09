<?php

namespace directapi\services\adimages\criterias;

use directapi\common\enum\YesNoEnum;

class AdImageSelectionCriteria
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
