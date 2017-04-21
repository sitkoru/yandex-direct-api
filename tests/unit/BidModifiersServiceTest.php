<?php

namespace directapi\tests\unit;

use directapi\DirectApiService;
use PHPUnit\Framework\TestCase;

class BidModifiersServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->BidModifiersService = $directApiService->getBidModifiersService();
    }

    public function add(){

    }

    public function delete(){

    }

    public function get(){

    }

    public function set(){

    }

    public function toggle(){

    }
}