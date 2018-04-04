<?php

namespace directapi\services\reports\exceptions;


class ReportParserException extends ReportException
{
    public function __construct($requestId, $errorCode, $errorMessage, $errorDetail)
    {
        parent::__construct('Report error parse', $requestId, $errorCode, $errorMessage, $errorDetail);
    }

}