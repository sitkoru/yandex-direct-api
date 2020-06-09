<?php

namespace directapi\common\containers;

class ArrayOfInteger
{
    /**
     * @var int[]
     */
    public $Items;

    public function __construct(array $items = [])
    {
        $this->Items = $items;
    }
}
