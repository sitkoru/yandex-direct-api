<?php

namespace directapi\tests\unit;

use directapi\common\containers\Base64Binary;
use directapi\DirectApiService;
use directapi\services\adimages\criterias\AdImageIdsCriteria;
use directapi\services\adimages\criterias\AdImageSelectionCriteria;
use directapi\services\adimages\enum\AdImageFieldEnum;
use directapi\services\adimages\models\AdImageActionResult;
use directapi\services\adimages\models\AdImageAddItem;
use directapi\services\adimages\models\AdImageGetItem;
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
        $selectionCriteria = new AdImageSelectionCriteria();
        $selectionCriteria->AdImageHashes = [DIRECT_AD_IMAGE_HASH];
        $response = $this->adImagesService->get($selectionCriteria, AdImageFieldEnum::getValues());

        if (isset($response)) {
            foreach ($response as $adImage) {
                $this->assertInstanceOf(AdImageGetItem::class, $adImage);
                $this->assertNotEmpty($adImage->AdImageHash);
            }
        }
    }

    public function testDelete()
    {
        $deleteImage = new AdImageIdsCriteria();
        //сначало загрузим картинку для теста. а затем будем удалять
        $adImage = new AdImageAddItem();
        $adImage->Name = 'testDelete';
        $adImage->ImageData = new Base64Binary(__DIR__ . '/../data/test_delete.jpg');
        $result = $this->adImagesService->add([$adImage]);

        $deleteImage->AdImageHashes = [$result[0]->AdImageHash];
        $deleteResult = $this->adImagesService->delete($deleteImage);

        $this->assertNotEmpty($deleteResult);

        /** @var AdImageActionResult[] $deleteResult */
        foreach ($deleteResult as $actionResult) {
            $this->assertEmpty($actionResult->Errors, 'Action result has errors: ' . json_encode($actionResult->Errors));
            $this->assertEmpty($actionResult->Warnings, 'Action result has warnings: ' . json_encode($actionResult->Warnings));
            $this->assertNotEmpty($actionResult->AdImageHash);
        }
    }

    public function testAddIm($name = 'test', $path = '/../data/test.jpg')
    {
        $adImage = new AdImageAddItem();
        $adImage->Name = $name;
        $adImage->ImageData = new Base64Binary(__DIR__ . $path);
        $result = $this->adImagesService->add([$adImage]);

        $this->assertNotEmpty($result);
        /** @var AdImageActionResult[] $result */
        if (isset($result)) {
            foreach ($result as $actionResult) {
                $this->assertEmpty($actionResult->Errors, 'Action result has errors: ' . json_encode($actionResult->Errors));
                $this->assertEmpty($actionResult->Warnings, 'Action result has warnings: ' . json_encode($actionResult->Warnings));
                $this->assertNotEmpty($actionResult->AdImageHash);
            }
        }
    }
}
