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
        string $errorDetail,
        \Exception $previous = null
    ) {
        parent::__construct($message, 0, 1, __FILE__, __LINE__, $previous);
        $this->requestId = $requestId;
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
        $this->errorDetail = $errorDetail;
    }
}
