<?php

namespace directapi\tests\unit;

use directapi\DirectApiService;
use PHPUnit\Framework\TestCase;

class SitelinksServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->SitelinksService = $directApiService->getSitelinksService();
    }

    public function testAdd()
    {
    }

    public function testDelete()
    {
    }

    public function testGet()
    {
    }
}
