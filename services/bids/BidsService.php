<?php

namespace directapi\services\bids;


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
        throw new \Exception('Not implemented');
    }

    /**
     * @param BidSetItem[] $Bids
     *
     * @return BidActionResult[]
     */
    public function set(array $Bids)
    {
        throw new \Exception('Not implemented');
    }

    /**
     * @param BidSetAutoItem[] $Bids
     *
     * @return BidActionResult[]
     */
    public function setAuto(array $Bids)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'bids';
    }
}