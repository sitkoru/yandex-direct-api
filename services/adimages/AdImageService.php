<?php

use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\services\BaseService;

class AdImageService extends BaseService
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

    public function delete(AdImagesIdsCriteria $SelectionCriteria)
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
        return 'adimage';
    }

    public function toUpdateEntities(array $entities)
    {
        throw new \ErrorException('Not implemented');
    }
}