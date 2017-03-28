<?php

namespace directapi;


class DirectApiResponse
{
    /**
     * @var string[]
     */
    public $headers;

    /**
     * @var string
     */
    public $body;

    /**
     * @var int
     */
    public $units;

    /**
     * @var int
     */
    public $lastCallCost;

    /**
     * @var int
     */
    public $unitsLimit;

    /**
     * @var bool
     */
    public $isSuccess = true;

    public function getData()
    {
        return json_decode($this->body);
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
        $this->parseUnitsHeader();
    }

    private function parseUnitsHeader()
    {
        $regex = '/(\d+)\/(\d+)\/(\d+)/';
        if (preg_match($regex, $this->headers['Units'][0], $matches)) {
            list(, $cost, $last, $limit) = $matches;
            $this->units = $last;
            $this->lastCallCost = $cost;
            $this->unitsLimit = $limit;
        } else {
            $this->lastCallCost = 20;
        }
    }

}