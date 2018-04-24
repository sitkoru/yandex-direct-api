<?php

namespace directapi\exceptions;


class DirectApiException extends \Exception
{
    public $error_detail;

    public $response;

    public function __construct($message = "", $code = 0, \Exception $previous = null, $response = null)
    {
        $this->response = $response;
        parent::__construct($message, $code, $previous);
    }
}