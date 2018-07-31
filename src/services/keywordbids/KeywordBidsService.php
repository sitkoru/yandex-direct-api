<?php

namespace directapi\services\keywordbids;


use directapi\common\criterias\LimitOffset;
use directapi\services\BaseService;
use directapi\services\keywordbids\criterias\KeywordBidsSelectionCriteria;
use directapi\services\keywordbids\enum\KeywordBidFieldEnum;
use directapi\services\keywordbids\models\KeywordBidActionResult;
use directapi\services\keywordbids\models\KeywordBidGetItem;
use directapi\services\keywordbids\models\KeywordBidSetAutoItem;
use directapi\services\keywordbids\models\KeywordBidSetItem;

class KeywordBidsService extends BaseService
{
    /**
     * @param KeywordBidsSelectionCriteria $SelectionCriteria
     * @param KeywordBidFieldEnum[]        $FieldNames
     *
     * @param string[]                     $SearchFieldNames
     * @param string[]                     $NetworkFieldNames
     * @param LimitOffset                  $Page
     * @return KeywordBidGetItem[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        KeywordBidsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $SearchFieldNames = [],
        array $NetworkFieldNames = [],
        LimitOffset $Page = null
    ): array {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        if ($SearchFieldNames) {
            $params['SearchFieldNames'] = $Page;
        }
        if ($NetworkFieldNames) {
            $params['NetworkFieldNames'] = $Page;
        }
        if ($Page) {
            $params['Page'] = $Page;
        }
        return $this->doGet($params, 'KeywordBids', KeywordBidGetItem::class);
    }

    /**
     * @param KeywordBidSetItem[] $Bids
     *
     * @return KeywordBidActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function set(array $Bids): array
    {
        $params = [
            'KeywordBids' => $Bids
        ];
        $result = $this->call('set', $params);
        return $this->mapArray($result->SetResults, KeywordBidActionResult::class);
    }

    /**
     * @param KeywordBidSetAutoItem[] $Bids
     *
     * @return KeywordBidActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function setAuto(array $Bids): array
    {
        $params = [
            'KeywordBids' => $Bids
        ];
        $result = $this->call('setAuto', $params);
        return $this->mapArray($result->SetAutoResults, KeywordBidActionResult::class);
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
        return 'keywordbids';
    }
}