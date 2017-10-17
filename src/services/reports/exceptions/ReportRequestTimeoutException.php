<?php

namespace directapi\services\reports\exceptions;


class ReportRequestTimeoutException extends ReportException
{
    public function __construct($requestId, $errorCode, $errorMessage, $errorDetail)
    {
        parent::__construct('Report request timeout', $requestId, $errorCode, $errorMessage, $errorDetail);
    }
}