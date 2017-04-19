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
     */
    public function add(array $VCards)
    {
        $params = [
            'VCards' => $VCards
        ];
        return parent::doAdd($params);
    }

    /**
     * @inheritdoc
     */
    public function delete(IdsCriteria $SelectionCriteria)
    {
        return parent::delete($SelectionCriteria);
    }

    /**
     * @param IdsCriteria      $SelectionCriteria
     * @param VCardFieldEnum[] $FieldNames
     * @param LimitOffset      $Page
     *
     * @return VCardGetItem[]
     */
    public function get(IdsCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null)
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

    protected function getName()
    {
        return 'vcards';
    }

    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }
}