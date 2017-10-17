<?php

namespace directapi;

class DirectApiRequest
{
    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $service;

    /**
     * @var array
     */
    public $params;

    public $sendClientLogin = true;

    public function getPayload()
    {
        $payload = [
            'method' => $this->method,

        ];

        if ($this->params) {
            $payload['params'] = $this->params;
        }

        return $payload;
    }
}