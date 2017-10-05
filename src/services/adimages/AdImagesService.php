<?php

namespace directapi\services\adimages;

use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\adimages\criterias\AdImageSelectionCriteria;
use directapi\services\adimages\enum\AdImageFieldEnum;
use directapi\services\adimages\models\AdImageAddItem;
use directapi\services\adimages\models\AdImageGetItem;
use directapi\services\BaseService;

class AdImagesService extends BaseService
{
    /**
     * @param AdImageAddItem[] $AdImages
     * @throws \Exception
     *
     * @return ActionResult[]
     */
    public function add(array $AdImages)
    {
        $params = [
            'AdGroups' => $AdImages
        ];
        return parent::doAdd($params);
    }

    /**
     * @param AdImageSelectionCriteria $SelectionCriteria
     * @param AdImageFieldEnum[]       $FieldNames
     * @param LimitOffset               $Page
     *
     * @return AdImageGetItem[]
     */

    public function get(AdImageSelectionCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'IdImage', AdImageGetItem::class);
    }

    protected function getName()
    {
        return 'adimages';
    }

    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }
}