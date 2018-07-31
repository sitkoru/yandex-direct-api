<?php

namespace directapi\exceptions;


class DirectApiException extends \Exception
{
    /**
     * @var string
     */
    public $error_detail;

    /**
     * @var null|string
     */
    public $response;

    public function __construct(
        string $message = '',
        int $code = 0,
        \Exception $previous = null,
        ?string $response = null
    ) {
        $this->response = $response;
        parent::__construct($message, $code, $previous);
    }
}