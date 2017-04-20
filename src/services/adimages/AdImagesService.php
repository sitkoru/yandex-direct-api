<?php

namespace directapi\services\adimages;

use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\components\interfaces\ICriteria;
use directapi\services\adimages\criterias\AdImageIdsCriteria;
use directapi\services\adimages\criterias\AdImageSelectionCriteria;
use directapi\services\adimages\enum\AdImageFieldEnum;
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
        return parent::doAdd($params, AdImageActionResult::class);
    }

    /**
     * @param AdImageIdsCriteria | ICriteria $SelectionCriteria
     * @return ActionResult[]
     */
    public function delete(AdImageIdsCriteria $SelectionCriteria)
    {
        return parent::delete($SelectionCriteria);
    }

    /**
     * @param AdImageSelectionCriteria $SelectionCriteria
     * @param AdImageFieldEnum[]       $FieldNames
     * @param LimitOffset              $Page
     *
     * @return AdImageGetItem[]
     */
    public function get(AdImageSelectionCriteria $SelectionCriteria = null, array $FieldNames, LimitOffset $Page = null)
    {
        $params = [
            'FieldNames' => $FieldNames
        ];
        if ($SelectionCriteria) {
            $params['SelectionCriteria'] = $SelectionCriteria;
        }
        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'AdImages', AdImageGetItem::class);
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