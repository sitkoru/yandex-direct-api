<?php

namespace directapi\services\vcards;


use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\BaseService;
use directapi\services\vcards\enum\VCardFieldEnum;
use directapi\services\vcards\models\VCardAddItem;
use directapi\services\vcards\models\VCardGetItem;

class VCardsService extends BaseService
{
    /**
     * @param VCardAddItem[] $VCards
     *
     * @return ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $VCards): array
    {
        $params = [
            'VCards' => $VCards
        ];
        return parent::doAdd($params);
    }

    /**
     * @param $SelectionCriteria
     * @return array|ActionResult[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function delete(IdsCriteria $SelectionCriteria): array
    {
        return parent::doDelete($SelectionCriteria);
    }

    /**
     * @param IdsCriteria      $SelectionCriteria
     * @param VCardFieldEnum[] $FieldNames
     * @param LimitOffset      $Page
     *
     * @return VCardGetItem[]
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(IdsCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null): array
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'VCards', VCardGetItem::class);
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
        return 'vcards';
    }
}