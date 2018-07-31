<?php

namespace directapi\services\reports\exceptions;


class ReportRequestTimeoutException extends ReportException
{
    public function __construct(string $requestId, int $errorCode, string $errorMessage, string $errorDetail)
    {
        parent::__construct('Report request timeout', $requestId, $errorCode, $errorMessage, $errorDetail);
    }
}