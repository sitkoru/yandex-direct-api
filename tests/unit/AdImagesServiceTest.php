<?php

namespace directapi\tests\unit;


use directapi\common\containers\Base64Binary;
use directapi\common\enum\YesNoEnum;
use directapi\DirectApiService;
use directapi\services\adimages\criterias\AdImageIdsCriteria;
use directapi\services\adimages\criterias\AdImageSelectionCriteria;
use directapi\services\adimages\enum\AdImageFieldEnum;
use directapi\services\adimages\models\AdImageAddItem;
use directapi\services\adimages\models\AdImageGetItem;
use directapi\services\ads\criterias\AdsSelectionCriteria;
use directapi\services\ads\enum\AdFieldEnum;
use directapi\services\ads\enum\DynamicTextAdFieldEnum;
use directapi\services\ads\enum\MobileAppAdFieldEnum;
use directapi\services\ads\enum\TextAdFieldEnum;
use PHPUnit\Framework\TestCase;

class AdImagesServiceTest extends TestCase
{
    /**
     * @var \directapi\services\adimages\AdImagesService
     */
    private $adImagesService;
    private $adsService;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->adImagesService = $directApiService->getAdImagesService();
        $this->adsService = $directApiService->getAdsService();
    }

    public function testGet()
    {
        $response = $this->adImagesService->get(null, AdImageFieldEnum::getValues());

        $this->assertNotEmpty($response);

        foreach ($response as $adImage) {
            $this->assertInstanceOf(AdImageGetItem::class, $adImage);
            $this->assertNotEmpty($adImage->AdImageHash);
        }
    }

    public function  testDelete(){
        $deleteImage = new AdImageIdsCriteria();
        $deleteImage->AdImageHashes = ['Xd_nIX2Pi4z8hUW7vkEptA'];
        $deleteResult = $this->adImagesService->delete($deleteImage);
        $this->assertNotEmpty($deleteResult);

    }

    public function testAddIm($name,$path){
        $adImage = new AdImageAddItem();
        $adImage->Name = $name;
        $adImage->ImageData = new Base64Binary(__DIR__ . $path);
        $result = $this->adImagesService->add([$adImage]);

        $this->assertNotEmpty($result);

        foreach ($result as $actionResult) {
            $this->assertEmpty($actionResult->Errors, 'Action result has errors: ' . json_encode($actionResult->Errors));
            $this->assertEmpty($actionResult->Warnings, 'Action result has warnings: ' . json_encode($actionResult->Warnings));

            $this->assertNotEmpty($actionResult->AdImageHash);
        }

        return $actionResult->AdImageHash;
    }

    public function testAdd()
    {
        $this->testAddIm('Test','/../data/test.jpg');
    }

    public function testAddImageToAdd()
    {
        $adCriteria = new AdsSelectionCriteria();
        $adCriteria->Ids = [YDUpdateAdId];
        $ads = $this->adsService->get($adCriteria, AdFieldEnum::getValues(), TextAdFieldEnum::getValues(), MobileAppAdFieldEnum::getValues(), DynamicTextAdFieldEnum::getValues());

        $this->assertNotEmpty($ads);
        $this->assertCount(1, $ads);
        $ad = reset($ads);

        /*$this->assertEmpty($ad->TextAd->AdImageHash, $ad->TextAd->AdImageHash);*/

        $imageCriteria = new AdImageSelectionCriteria();
        /*$imageCriteria->AdImageHashes = [YDAdImageHash];*/
        $imageCriteria->AdImageHashes = [$this->testAddIm('Test','/../data/test.jpg')];
        $images = $this->adImagesService->get($imageCriteria, AdImageFieldEnum::getValues());

        $this->assertNotEmpty($images);
        /**
         * @var AdImageGetItem $image
         */
        $image = reset($images);

       /* $this->assertEquals(YesNoEnum::NO, $image->Associated);*/

        $ad->TextAd->AdImageHash = $image->AdImageHash;
        $adToUpdate = $this->adsService->toUpdateEntities([$ad]);

        $results = $this->adsService->update($adToUpdate);

        $this->assertNotEmpty($results);
        $result = reset($results);
        $this->assertEmpty($result->Errors);
        $this->assertEmpty($result->Warnings);

        $imageCriteria = new AdImageSelectionCriteria();
        $imageCriteria->AdImageHashes = [$image->AdImageHash];
        $updatedImages = $this->adImagesService->get($imageCriteria, AdImageFieldEnum::getValues());
        $this->assertNotEmpty($updatedImages);

        /**
         * @var AdImageGetItem $updatedImage
         */
        $updatedImage = reset($updatedImages);

        $this->assertEquals(YesNoEnum::YES, $updatedImage->Associated);

        $updatedAds = $this->adsService->get($adCriteria, AdFieldEnum::getValues(), TextAdFieldEnum::getValues(), MobileAppAdFieldEnum::getValues(), DynamicTextAdFieldEnum::getValues());

        $this->assertNotEmpty($updatedAds);
        $updatedAd = reset($updatedAds);
        $this->assertNotEmpty($updatedAd->TextAd->AdImageHash);
        $this->assertEquals($image->AdImageHash, $updatedAd->TextAd->AdImageHash);

        $updatedAd->TextAd->AdImageHash = 'null';
        $adToUpdate = $this->adsService->toUpdateEntities([$updatedAd]);
        $results = $this->adsService->update($adToUpdate);

        $this->assertNotEmpty($results);
        $result = reset($results);
        $this->assertEmpty($result->Errors, 'Action result has errors: ' . json_encode($result->Errors));
        $this->assertEmpty($result->Warnings, 'Action result has warnings: ' . json_encode($result->Warnings));
    }
}