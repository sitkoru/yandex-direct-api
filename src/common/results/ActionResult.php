<?php

namespace directapi\common\results;

class ActionResult
{
    /**
     * @var int
     */
    public $Id;

    /**
     * @var ExceptionNotification[]
     */
    public $Warnings;

    /**
     * @var ExceptionNotification[]
     */
    public $Errors;
}
