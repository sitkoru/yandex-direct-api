<?php

namespace directapi\services\changes;


use directapi\services\BaseService;
use directapi\services\changes\enum\FieldNamesEnum;
use directapi\services\changes\models\CheckCampaignsResponse;
use directapi\services\changes\models\CheckDictionariesResponse;
use directapi\services\changes\models\CheckResponse;

class ChangesService extends BaseService
{
    /**
     * @param string $Timestamp
     *
     * @return CheckDictionariesResponse
     */
    public function checkDictionaries($Timestamp)
    {
        throw new \Exception('Not implemented');
    }

    /**
     * @param string $Timestamp
     *
     * @return CheckCampaignsResponse
     */
    public function checkCampaigns($Timestamp)
    {
        throw new \Exception('Not implemented');
    }

    /**
     * @param int[]            $CampaignIds
     * @param int[]            $AdGroupIds
     * @param int[]            $AdIds
     * @param FieldNamesEnum[] $FieldNames
     * @param string           $Timestamp
     *
     * @return CheckResponse
     */
    public function check(array $CampaignIds, array  $AdGroupIds, array  $AdIds, array  $FieldNames, $Timestamp)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'changes';
    }
}