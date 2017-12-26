<?php

namespace directapi\services\adextensions\enum;


use directapi\components\Enum;

class ExtensionStatusSelectionEnum extends Enum
{
    const ACCEPTED = 'ACCEPTED';
    const DRAFT = 'DRAFT';
    const MODERATION = 'MODERATION';
    const REJECTED = 'REJECTED';
}