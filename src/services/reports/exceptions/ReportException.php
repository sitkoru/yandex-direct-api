<?php

namespace directapi\services\reports\exceptions;


abstract class ReportException extends \ErrorException
{
    public $requestId;
    public $errorCode;
    public $errorMessage;
    public $errorDetail;

    public function __construct(
        $message,
        $requestId,
        $errorCode,
        $errorMessage,
        $errorDetail
    ) {
        parent::__construct($message);
        $this->requestId = $requestId;
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->errorDetail = $errorDetail;
    }
}