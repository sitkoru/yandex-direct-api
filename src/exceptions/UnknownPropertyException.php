<?php

namespace directapi\exceptions;


class UnknownPropertyException extends \Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName(): string
    {
        return 'Unknown Property';
    }
}