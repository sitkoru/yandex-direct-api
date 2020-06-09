<?php

namespace directapi\services\reports\exceptions;

class ReportParserException extends ReportException
{
    public function __construct(
        string $requestId,
        int $errorCode,
        string $errorMessage,
        string $errorDetail,
        \Exception $previous = null
    ) {
        parent::__construct('Report error parse', $requestId, $errorCode, $errorMessage, $errorDetail, $previous);
    }
}
