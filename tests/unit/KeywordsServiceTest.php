<?php

namespace directapi\tests\unit;

use directapi\common\criterias\IdsCriteria;
use directapi\DirectApiService;
use directapi\services\keywords\criterias\KeywordsSelectionCriteria;
use directapi\services\keywords\enum\KeywordFieldEnum;
use directapi\services\keywords\models\KeywordAddItem;
use directapi\services\keywords\models\KeywordUpdateItem;
use PHPUnit\Framework\TestCase;

/**
 * @property  \directapi\services\keywords\KeywordsService KeywordsService
 */
class KeywordsServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->KeywordsService = $directApiService->getKeywordsService();
    }

    public function testAdd()
    {
        $keyword = new KeywordAddItem();
        $keyword->AdGroupId = DIRECT_GROUP_ID;
        $keyword->Keyword = 'somelalall';
        $result = $this->KeywordsService->add([$keyword]);
        $this->assertNotEmpty($result);

        foreach ($result as $actionResult) {
            var_dump($actionResult->Id);
        }
    }

    public function testDelete()
    {
        $deleteKeyword = new IdsCriteria();
        $deleteKeyword->Ids = [DIRECT_UPDATE_KEYWORD_ID];
        $deleteResult = $this->KeywordsService->delete($deleteKeyword);
        $this->assertNotEmpty($deleteResult);

        var_dump($deleteResult);
    }

    public function testGet()
    {
        $SelectionCriteria = new KeywordsSelectionCriteria;
        $SelectionCriteria->Ids = [DIRECT_UPDATE_KEYWORD_ID];
        $response = $this->KeywordsService->get($SelectionCriteria, KeywordFieldEnum::getValues());
        $this->assertEmpty($response);
        var_dump($response);
    }

    //Возобновляет показы по ранее остановленным ключевым фразам.
    public function testResume()
    {
        $SelectionCriteria = new IdsCriteria();
        $SelectionCriteria->Ids = [DIRECT_UPDATE_KEYWORD_ID];
        $response = $this->KeywordsService->resume($SelectionCriteria);
        $this->assertNotEmpty($response);
        var_dump($response);
    }

    //Останавливает показы по ключевым фразам.
    public function testSuspend()
    {
        $SelectionCriteria = new IdsCriteria();
        $SelectionCriteria->Ids = [DIRECT_UPDATE_KEYWORD_ID];
        $response = $this->KeywordsService->suspend($SelectionCriteria);
        $this->assertNotEmpty($response);
        var_dump($response);
    }

    public function testUpdate()
    {
        $updateKeyword = new KeywordUpdateItem();
        $updateKeyword->Id = DIRECT_UPDATE_KEYWORD_ID;
        $updateKeyword->Keyword = 'newlalalaa';
        $response = $this->KeywordsService->update([$updateKeyword]);
        $this->assertNotEmpty($response);
        var_dump($response);
    }
}
