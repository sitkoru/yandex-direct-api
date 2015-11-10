<?php

namespace directapi\services\changes\models;


class CheckResponse
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