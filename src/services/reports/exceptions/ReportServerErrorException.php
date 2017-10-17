<?php

namespace directapi\services\reports\exceptions;


class ReportServerErrorException extends ReportException
{
    public function __construct($requestId, $errorCode, $errorMessage, $errorDetail)
    {
        parent::__construct('Internal server error', $requestId, $errorCode, $errorMessage, $errorDetail);
    }
}