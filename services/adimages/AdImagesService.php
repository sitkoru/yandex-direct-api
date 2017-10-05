<?php

namespace directapi\services\adimages;

use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\components\interfaces\ICriteria;
use directapi\services\adimages\criterias\AdImageIdsCriteria;
use directapi\services\BaseService;

class AdImagesService extends BaseService
{
    /**
     * @param AdImagesAddItem[] $AdImages
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
     * @param AdImageIdsCriteria | ICriteria $SelectionCriteria
     * @return ActionResult[]
     */
    public function delete($SelectionCriteria)
    {
        return parent::delete($SelectionCriteria);
    }

    /**
     * @param AdImagesSelectionCriteria $SelectionCriteria
     * @param AdImagesFieldEnum[]       $FieldNames
     * @param LimitOffset               $Page
     *
     * @return AdImagesGetItem[]
     */

    public function get(AdImagesSelectionCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'IdImage', AdImagesGetItem::class);
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