<?php

namespace directapi\services\adimages;

use directapi\common\criterias\LimitOffset;
use directapi\components\interfaces\ICriteria;
use directapi\services\adimages\criterias\AdImagesIdsCriteria;
use directapi\services\adimages\criterias\AdImagesSelectionCriteria;
use directapi\services\adimages\enum\AdImagesFieldEnum;
use directapi\services\adimages\models\AdImageActionResult;
use directapi\services\adimages\models\AdImageAddItem;
use directapi\services\adimages\models\AdImageGetItem;
use directapi\services\BaseService;

class AdImagesService extends BaseService
{
    /**
     * @param AdImageAddItem[] $AdImages
     * @throws \Exception
     *
     * @return AdImageActionResult[]
     */
    public function add(array $AdImages)
    {
        $params = [
            'AdImages' => $AdImages
        ];
        return $this->doAdd($params, AdImageActionResult::class);
    }

    /**
     * @param AdImagesIdsCriteria | ICriteria $SelectionCriteria
     * @return AdImageActionResult[]
     */
    public function delete($SelectionCriteria)
    {
        return parent::doDelete($SelectionCriteria, AdImageActionResult::class);
    }

    /**
     * @param AdImagesSelectionCriteria $SelectionCriteria
     * @param AdImagesFieldEnum[]       $FieldNames
     * @param LimitOffset               $Page
     *
     * @return AdImageGetItem[]
     */

    public function get(AdImagesSelectionCriteria $SelectionCriteria = null, array $FieldNames, LimitOffset $Page = null)
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