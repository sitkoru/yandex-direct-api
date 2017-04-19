<?php

namespace directapi\services\reports\models;


class ReportPage
{
    /**
     * @var int Максимальное количество строк в отчете.
     */
    public $limit;

    /**
     * ReportPage constructor.
     * @param int $limit
     */
    public function __construct($limit)
    {
        $this->limit = $limit;
    }
}