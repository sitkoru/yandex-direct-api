<?php

namespace directapi\common\criterias;

use Symfony\Component\Validator\Constraints as Assert;

class IdsCriteria
{
    /**
     * @var int[]
     * @Assert\NotBlank()
     */
    public $Ids;
}