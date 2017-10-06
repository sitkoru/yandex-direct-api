<?php

namespace directapi\tests\unit;


use directapi\common\criterias\IdsCriteria;
use directapi\DirectApiService;
use directapi\services\adgroups\criterias\AdGroupsSelectionCriteria;
use directapi\services\adgroups\enum\AdGroupFieldEnum;
use directapi\services\adgroups\models\AdGroupAddItem;
use directapi\services\adgroups\models\AdGroupUpdateItem;
use PHPUnit\Framework\TestCase;

/**
 * @property \directapi\services\adgroups\AdGroupsService adGroupsService
 */
class AdGroupsServiceTest extends TestCase
{
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $directApiService = new DirectApiService(DIRECT_UPDATE_ACCESS_TOKEN, DIRECT_UPDATE_LOGIN);
        $this->adGroupsService = $directApiService->getAdGroupsService();
    }

    public function testAdd()
    {
        $adGroup = new AdGroupAddItem();
        $adGroup->Name = 'Test';
        $adGroup->CampaignId = CAMPAIGH_ID;
        $adGroup->RegionIds = [1];
        $result = $this->adGroupsService->add([$adGroup]);
        $this->assertNotEmpty($result);

        foreach ($result as $actionResult) {
            var_dump($actionResult->Id);
        }
    }

    public function testDelete()
    {
        $deleteGroup = new IdsCriteria();
        $deleteGroup->Ids = [GROUPId];
        $deleteResult = $this->adGroupsService->doDelete($deleteGroup);
        $this->assertEmpty($deleteResult);

        var_dump($deleteResult);
    }

    public function testGet()
    {
        $SelectionCriteria = new AdGroupsSelectionCriteria;
        $SelectionCriteria->Ids = [GROUPId];
        $response = $this->adGroupsService->get($SelectionCriteria, AdGroupFieldEnum::getValues());
        $this->assertNotEmpty($response);

        var_dump($response);
    }

    public function testUpdate()
    {
        $updateGroup = new AdGroupUpdateItem();
        $updateGroup->Id = GROUPId;
        $updateGroup->Name = 'CHANGED';
        $updateGroup->RegionIds = [1];
        $response = $this->adGroupsService->update([$updateGroup]);
        $this->assertNotEmpty($response);
        var_dump($response);
    }
}