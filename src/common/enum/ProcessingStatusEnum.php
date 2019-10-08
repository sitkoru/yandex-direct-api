<?php


namespace directapi\common\enum;

use directapi\components\Enum;

class ProcessingStatusEnum extends Enum
{
    public const EMPTY_RESULT = 'EMPTY_RESULT';
    public const PROCESSED = 'PROCESSED';
    public const UNKNOWN = 'UNKNOWN';
    public const UNPROCESSED = 'UNPROCESSED';
}
