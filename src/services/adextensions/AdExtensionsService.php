<?php

namespace directapi\services\adextensions;


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
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');

    }

    /**
     * @param AdExtensionAddItem[] $AdExtensions
     *
     * @return ActionResult[]
     */
    public function add(array $AdExtensions)
    {
        $params = [
            'AdExtensions' => $AdExtensions
        ];
        return parent::doAdd($params);
    }

    /**
     * @inheritdoc
     */
    public function delete($SelectionCriteria)
    {
        return parent::doDelete($SelectionCriteria);
    }

    /**
     * @param AdExtensionsSelectionCriteria $SelectionCriteria
     *
     * @param AdExtensionFieldEnum[]        $FieldNames
     * @param CalloutFieldEnum[]            $CalloutFieldNames
     * @param LimitOffset                   $Page
     * @return AdExtensionGetItem[]
     */
    public function get(
        AdExtensionsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        array $CalloutFieldNames = [],
        LimitOffset $Page = null
    ) {
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

    protected function getName()
    {
        return 'adextensions';
    }
}