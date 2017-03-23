<?php

namespace directapi\services\reports\exceptions;


class ReportBadRequestException extends ReportException
{
    public function __construct($requestId, $errorCode, $errorMessage, $errorDetail)
    {
        parent::__construct('Report bad request', $requestId, $errorCode, $errorMessage, $errorDetail);
    }
}