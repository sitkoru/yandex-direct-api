<?php

namespace directapi\tests\unit;

use directapi\DirectApiService;
use PHPUnit\Framework\TestCase;

class BidsServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->BidsService = $directApiService->getBidsService();
    }

    public function testGet(){

    }

    public function testSet(){

    }

    public function testSetAuto(){

    }
}