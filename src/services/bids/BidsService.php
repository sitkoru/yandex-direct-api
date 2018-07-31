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
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(BidsSelectionCriteria $SelectionCriteria, array $FieldNames): array
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function set(array $Bids): array
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
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function setAuto(array $Bids): array
    {
        $params = [
            'Bids' => $Bids
        ];
        $result = $this->call('setAuto', $params);
        return $this->mapArray($result->SetAutoResults, BidActionResult::class);
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
        return 'bids';
    }
}