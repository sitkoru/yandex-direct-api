<?php

namespace directapi\services\changes\models;


use directapi\components\Model;

class CheckResponse extends Model
{
    /**
     * @var CheckResponseModified[]
     */
    public $Modified;

    /**
     * @var CheckResponseIds[]
     */
    public $NotFound;

    /**
     * @var CheckResponseIds[]
     */
    public $Unprocessed;

    /**
     * @var string
     */
    public $Timestamp;
}