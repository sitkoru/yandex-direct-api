<?php

namespace directapi\exceptions;

class DirectAccountNotExistException extends DirectApiException
{
    public function __construct(string $message = '', int $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
