<?php

namespace directapi\services\bids;


use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\keywordbids\criterias\KeywordBidsSelectionCriteria;
use directapi\services\keywordbids\enum\KeywordBidFieldEnum;
use directapi\services\keywordbids\models\KeywordBidActionResult;
use directapi\services\keywordbids\models\KeywordBidGetItem;
use directapi\services\keywordbids\models\KeywordBidSetAutoItem;

class KeywordBidsService extends BaseService
{
    /**
     * @param KeywordBidsSelectionCriteria $SelectionCriteria
     * @param KeywordBidFieldEnum[]               $FieldNames
     *
     * @return KeywordBidGetItem[]
     */
    public function get(KeywordBidsSelectionCriteria $SelectionCriteria, array $FieldNames)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        return $this->doGet($params, 'KeywordBids', KeywordBidGetItem::class);
    }

    /**
     * @param KeywordBidGetItem[] $Bids
     *
     * @return KeywordBidActionResult[]
     */
    public function set(array $Bids)
    {
        $params = [
            'Bids' => $Bids
        ];
        $result = $this->call('set', $params);
        return $this->mapArray($result->SetResults, ActionResult::class);
    }

    /**
     * @param KeywordBidSetAutoItem[] $Bids
     *
     * @return KeywordBidActionResult[]
     */
    public function setAuto(array $Bids)
    {
        $params = [
            'Bids' => $Bids
        ];
        $result = $this->call('setAuto', $params);
        return $this->mapArray($result->SetAutoResults, KeywordBidActionResult::class);
    }

    protected function getName()
    {
        return 'bids';
    }

    /**
     * @param array $entities
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }
}