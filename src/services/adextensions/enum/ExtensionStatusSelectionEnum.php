<?php

namespace directapi\services\adextensions\enum;

use directapi\components\Enum;

class ExtensionStatusSelectionEnum extends Enum
{
    public const ACCEPTED = 'ACCEPTED';
    public const DRAFT = 'DRAFT';
    public const MODERATION = 'MODERATION';
    public const REJECTED = 'REJECTED';
}
