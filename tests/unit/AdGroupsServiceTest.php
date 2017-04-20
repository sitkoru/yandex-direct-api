<?php

namespace directapi\tests\unit;


use directapi\DirectApiService;
use directapi\services\adgroups\models\AdGroupAddItem;
use PHPUnit\Framework\TestCase;

class AdGroupsServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = ''){
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);

        $this->adGroupsService = $directApiService->getAdGroupsService();
    }

    public function testAdd(){
        $adGroup = new AdGroupAddItem();
        $adGroup->Name='Èìÿ';
        $adGroup->RegionIds=174;


    }

    public function testDelete(){

    }

    public function testGet(){

    }

    public function testUpdate(){

    }
}