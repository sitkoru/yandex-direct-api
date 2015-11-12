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
        $params = [
            'Timestamp' => $Timestamp
        ];
        $result = $this->call('checkDictionaries', $params);
        return $this->map($result, CheckDictionariesResponse::class);
    }

    /**
     * @param string $Timestamp
     *
     * @return CheckCampaignsResponse
     */
    public function checkCampaigns($Timestamp)
    {
        $params = [
            'Timestamp' => $Timestamp
        ];
        $result = $this->call('checkCampaigns', $params);
        return $this->map($result, CheckCampaignsResponse::class);
    }

    /**
     * @param int[]            $CampaignIds
     * @param int[]            $AdGroupIds
     * @param int[]            $AdIds
     * @param FieldNamesEnum[] $FieldNames
     * @param string           $Timestamp
     * @return CheckResponse
     * @throws \Exception
     */
    public function check(
        array $CampaignIds = [],
        array  $AdGroupIds = [],
        array  $AdIds = [],
        array  $FieldNames,
        $Timestamp
    ) {
        $params = [
        ];
        if ($CampaignIds) {
            $params['CampaignIds'] = $CampaignIds;
        } elseif ($AdGroupIds) {
            $params['AdGroupIds'] = $AdGroupIds;
        } elseif ($AdIds) {
            $params['AdIds'] = $AdIds;
        } else {
            throw new \Exception('Должен быть указан один из параметров - CampaignIds, AdGroupIds, AdIds');
        }
        $params['FieldNames'] = $FieldNames;
        $params['Timestamp'] = $Timestamp;
        $result = $this->call('check', $params);
        return $this->map($result, CheckResponse::class);
    }

    protected function getName()
    {
        return 'changes';
    }
}