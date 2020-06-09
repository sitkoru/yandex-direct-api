<?php

namespace directapi\services\adextensions;

use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\adextensions\criterias\AdExtensionsSelectionCriteria;
use directapi\services\adextensions\enum\AdExtensionFieldEnum;
use directapi\services\adextensions\enum\CalloutFieldEnum;
use directapi\services\adextensions\models\AdExtensionAddItem;
use directapi\services\adextensions\models\AdExtensionGetItem;
use directapi\services\BaseService;

class AdExtensionsService extends BaseService
{
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

    /**
     * @param AdExtensionAddItem[] $AdExtensions
     *
     * @return ActionResult[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function add(array $AdExtensions): array
    {
        $params = [
            'AdExtensions' => $AdExtensions
        ];
        return parent::doAdd($params);
    }

    /**
     * @param $SelectionCriteria
     *
     * @return array
     *
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
     * @param AdExtensionsSelectionCriteria $SelectionCriteria
     * @param AdExtensionFieldEnum[]        $FieldNames
     * @param CalloutFieldEnum[]            $CalloutFieldNames
     * @param LimitOffset                   $Page
     *
     * @return AdExtensionGetItem[]
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \directapi\exceptions\DirectApiException
     * @throws \directapi\exceptions\DirectApiNotEnoughUnitsException
     * @throws \directapi\exceptions\RequestValidationException
     */
    public function get(
        AdExtensionsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $CalloutFieldNames = [],
        LimitOffset $Page = null
    ): array {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];

        if ($CalloutFieldNames) {
            $params['CalloutFieldNames'] = $CalloutFieldNames;
        }

        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'AdExtensions', AdExtensionGetItem::class);
    }

    protected function getName(): string
    {
        return 'adextensions';
    }
}
