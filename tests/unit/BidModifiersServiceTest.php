<?php

namespace directapi\tests\unit;

use directapi\DirectApiService;
use directapi\services\bidmodifiers\BidModifiersService;
use directapi\services\bidmodifiers\models\BidModifierAddItem;
use PHPUnit\Framework\TestCase;

/**
 * @property BidModifiersService BidModifiersService
 */
class BidModifiersServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->BidModifiersService = $directApiService->getBidModifiersService();
    }

    public function add(){
        $bitModifiers = new BidModifierAddItem();
        $bitModifiers->CampaignId = GROUPId;

        $result = $this->BidModifiersService->add([$bitModifiers]);

        $this->assertNotEmpty($result);

        foreach ($result as $actionResult) {
            var_dump($actionResult->Ids);
        }
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