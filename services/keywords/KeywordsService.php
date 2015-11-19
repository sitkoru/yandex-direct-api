<?php

namespace directapi\services\keywords;


use directapi\common\criterias\IdsCriteria;
use directapi\common\criterias\LimitOffset;
use directapi\common\results\ActionResult;
use directapi\keywords\models\KeywordAddItem;
use directapi\keywords\models\KeywordGetItem;
use directapi\keywords\models\KeywordUpdateItem;
use directapi\services\BaseService;
use directapi\services\keywords\criterias\KeywordsSelectionCriteria;
use directapi\services\keywords\enum\KeywordFieldEnum;

class KeywordsService extends BaseService
{
    /**
     * @param KeywordAddItem[] $Keywords
     *
     * @return ActionResult[]
     */
    public function add(array $Keywords)
    {
        $params = [
            'Keywords' => $Keywords
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
     * @param KeywordsSelectionCriteria $SelectionCriteria
     * @param KeywordFieldEnum[]        $FieldNames
     * @param LimitOffset|null          $Page
     *
     * @return KeywordGetItem[]
     */
    public function get(KeywordsSelectionCriteria $SelectionCriteria, array $FieldNames, LimitOffset $Page = null)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];
        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'Keywords', KeywordGetItem::class);
    }

    /**
     * @inheritdoc
     */
    public function resume(IdsCriteria $SelectionCriteria)
    {
        return parent::resume($SelectionCriteria);
    }

    /**
     * @inheritdoc
     */
    public function suspend(IdsCriteria $SelectionCriteria)
    {
        return parent::suspend($SelectionCriteria);
    }

    /**
     * @param KeywordUpdateItem[] $Keywords
     *
     * @return ActionResult[]
     */
    public function update(array $Keywords)
    {
        $params = [
            'Keywords' => $Keywords
        ];
        return parent::doUpdate($params);
    }

    protected function getName()
    {
        return 'keywords';
    }
}