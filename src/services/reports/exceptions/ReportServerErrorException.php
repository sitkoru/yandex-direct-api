<?php

namespace directapi\services\reports\exceptions;

class ReportServerErrorException extends ReportException
{
    public function __construct(string $requestId, int $errorCode, string $errorMessage, string $errorDetail)
    {
        parent::__construct('Internal server error', $requestId, $errorCode, $errorMessage, $errorDetail);
    }
}
