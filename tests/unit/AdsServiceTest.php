<?php

namespace directapi\tests\unit;

use directapi\DirectApiService;
use directapi\services\ads\models\AdAddItem;
use directapi\services\ads\models\TextAdAdd;
use PHPUnit\Framework\TestCase;

/**
 * @property \directapi\services\ads\AdsService adsService
 */
class AdsServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->adsService = $directApiService->getAdsService();
    }

    public function testAdd()
    {
        $textAd = new TextAdAdd();
        $textAd->Text = 'terfegs some text ajajaj';
        $textAd->Title = 'title';
        $textAd->Mobile = 'NO';

        $ad = new AdAddItem();
        $ad->AdGroupId = GROUPId;
        $ad->TextAd = $textAd;

        $result = $this->adsService->add([$ad]);
        $this->assertNotEmpty($result);

        foreach ($result as $actionResult) {
            var_dump($actionResult);
        }
    }

    public function testArchive()
    {

    }

    public function testDelete()
    {

    }

    public function testGet()
    {

    }

    public function testModerate()
    {

    }

    public function testResume()
    {

    }

    public function testSuspend()
    {

    }

    public function testUnarchive()
    {

    }

    public function testUpdate()
    {

    }
}