<?php

namespace directapi\services\reports\exceptions;


class ReportBadRequestException extends ReportException
{
    public function __construct(string $requestId, int $errorCode, string $errorMessage, string $errorDetail)
    {
        parent::__construct('Report bad request', $requestId, $errorCode, $errorMessage, $errorDetail);
    }
}