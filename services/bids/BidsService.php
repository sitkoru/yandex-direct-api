<?php

namespace directapi\services\bids;


use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\bids\criterias\BidsSelectionCriteria;
use directapi\services\bids\enum\BidFieldEnum;
use directapi\services\bids\models\BidActionResult;
use directapi\services\bids\models\BidGetItem;
use directapi\services\bids\models\BidSetAutoItem;
use directapi\services\bids\models\BidSetItem;

class BidsService extends BaseService
{
    /**
     * @param BidsSelectionCriteria $SelectionCriteria
     * @param BidFieldEnum[]        $FieldNames
     *
     * @return BidGetItem[]
     */
    public function get(BidsSelectionCriteria $SelectionCriteria, array $FieldNames)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        return $this->doGet($params, 'Bids', BidGetItem::class);
    }

    /**
     * @param BidSetItem[] $Bids
     *
     * @return BidActionResult[]
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
     * @param BidSetAutoItem[] $Bids
     *
     * @return BidActionResult[]
     */
    public function setAuto(array $Bids)
    {
        $params = [
            'Bids' => $Bids
        ];
        $result = $this->call('setAuto', $params);
        return $this->mapArray($result->SetAutoResults, BidActionResult::class);
    }

    protected function getName()
    {
        return 'bids';
    }
}