<?php

namespace directapi\services\keywordsResearch\enum;

use directapi\components\Enum;

class DeduplicateOperationEnum extends Enum
{
    public const MERGE_DUPLICATES = 'MERGE_DUPLICATES';
    public const ELIMINATE_OVERLAPPING = 'ELIMINATE_OVERLAPPING';
}
