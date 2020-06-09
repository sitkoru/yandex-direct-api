<?php

namespace directapi\services\changes;

use directapi\exceptions\DirectApiException;
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
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonMapper_Exception
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function checkDictionaries($Timestamp): CheckDictionariesResponse
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
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonMapper_Exception
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function checkCampaigns($Timestamp): CheckCampaignsResponse
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
     *
     * @return CheckResponse
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \JsonMapper_Exception
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     * @throws \Exception
     */
    public function check(
        array $CampaignIds,
        array $AdGroupIds,
        array $AdIds,
        array $FieldNames,
        $Timestamp
    ): CheckResponse {
        $params = [
        ];
        if ($CampaignIds) {
            $params['CampaignIds'] = $CampaignIds;
        } elseif ($AdGroupIds) {
            $params['AdGroupIds'] = $AdGroupIds;
        } elseif ($AdIds) {
            $params['AdIds'] = $AdIds;
        } else {
            throw new DirectApiException('Должен быть указан один из параметров - CampaignIds, AdGroupIds, AdIds');
        }
        $params['FieldNames'] = $FieldNames;
        $params['Timestamp'] = $Timestamp;
        $result = $this->call('check', $params);
        return $this->map($result, CheckResponse::class);
    }

    /**
     * @param array $entities
     *
     * @return array
     *
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
        throw new \ErrorException('Not implemented');
    }

    protected function getName(): string
    {
        return 'changes';
    }
}
