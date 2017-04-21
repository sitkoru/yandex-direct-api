<?php

namespace directapi\tests\unit;

use directapi\DirectApiService;
use directapi\services\vcards\models\Phone;
use directapi\services\vcards\models\VCardAddItem;
use PHPUnit\Framework\TestCase;

/**
 * @property \directapi\services\vcards\VCardsService VCardsService
 */
class VCardsServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->VCardsService = $directApiService->getVCardsService();
    }

    public function testAdd()
    {
        $phone = new Phone();
        $phone->CityCode = '812';
        $phone->Extension = '89';
        $phone->PhoneNumber = '123-45-67';
        $phone->CountryCode = '+7';

        $vCard = new VCardAddItem();
        $vCard->CampaignId = CAMPAIGH_ID;
        $vCard->Country = 'Russia';
        $vCard->City = 'Moscow';
        $vCard->CompanyName = 'Some Company NAME';
        $vCard->WorkTime = '0;3;10;0;18;0;4;6;10;0;11;0';
        $vCard->Phone = $phone;

        var_dump($vCard);

        $result = $this->VCardsService->add([$vCard]);

        $this->assertNotEmpty($result);

        foreach ($result as $actionResult) {
            var_dump($actionResult->Id);
        }
    }

    public function testDelete()
    {

    }

    public function testGet()
    {

    }
}