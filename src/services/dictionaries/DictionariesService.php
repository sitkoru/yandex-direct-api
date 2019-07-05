<?php

namespace directapi\services\dictionaries;

use directapi\services\BaseService;
use directapi\components\Model;
use directapi\services\dictionaries\models\CurrenciesItemGet;
use directapi\services\dictionaries\models\DictionaryGetItem;
use directapi\services\dictionaries\models\MetroStationItemGet;
use directapi\services\dictionaries\models\GeoRegionItemGet;
use directapi\services\dictionaries\models\TimeZoneItemGet;
use directapi\services\dictionaries\models\ConstantItemGet;
use directapi\services\dictionaries\models\AdCategoryItemGet;
use directapi\services\dictionaries\models\OperationSystemVersionItemGet;
use directapi\services\dictionaries\models\SupplySidePlatformItemGet;
use directapi\services\dictionaries\models\InterestItemGet;
use directapi\services\dictionaries\models\AudienceCriteriaTypeItemGet;
use directapi\services\dictionaries\models\AudienceDemographicProfileItemGet;
use directapi\services\dictionaries\models\AudienceInterestItemGet;

class DictionariesService extends BaseService
{
    /**
     * @param DictionariesFieldEnum[] $DictionaryNames
     *
     * @return models\CurrencyItemGet[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get($DictionaryName): array {
        $params = [
            'DictionaryNames' => array($DictionaryName),
        ];

        $class = "\directapi\services\dictionaries\models\\" . $DictionaryName . 'ItemGet';

        return parent::doGet($params, $DictionaryName, $class);
    }

    /**
     * @param array $entities
     * @return array
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
      throw new \ErrorException('Not implemented');
    }

    protected function getName(): string
    {
        return 'dictionaries';
    }
}