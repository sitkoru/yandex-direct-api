<?php

namespace directapi\services\ads\models;


use directapi\components\Enum;

class AdGroupStatusEnum extends Enum
{
    const DRAFT = 'DRAFT';
    const MODERATION = 'MODERATION';
    const PREACCEPTED = 'PREACCEPTED';
    const ACCEPTED = 'ACCEPTED';
    const REJECTED = 'REJECTED';
}