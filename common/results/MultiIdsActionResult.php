<?php

namespace directapi\common\results;


class MultiIdsActionResult
{
    /**
     * @var int
     */
    public $Ids;

    /**
     * @var ExceptionNotification[]
     */
    public $Warnings;

    /**
     * @var ExceptionNotification[]
     */
    public $Errors;
}