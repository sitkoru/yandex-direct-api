<?php

namespace directapi\services\reports\exceptions;


abstract class ReportException extends \ErrorException
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $errorDetail;

    public function __construct(
        string $message,
        string $requestId,
        int $errorCode,
        string $errorMessage,
        string $errorDetail
    ) {
        parent::__construct($message);
        $this->requestId = $requestId;
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->errorDetail = $errorDetail;
    }
}