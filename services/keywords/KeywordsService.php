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
        throw new \Exception('Not implemented');
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function delete(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('delete', $params);
        $result = $this->mapArray($response->DeleteResults, ActionResult::class);
        return $result;
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
        throw new \Exception('Not implemented');
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function resume(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('resume', $params);
        $result = $this->mapArray($response->ResumeResults, ActionResult::class);
        return $result;
    }

    /**
     * @param IdsCriteria $SelectionCriteria
     *
     * @return ActionResult[]
     */
    public function suspend(IdsCriteria $SelectionCriteria)
    {
        $params = [
            'SelectionCriteria' => $SelectionCriteria
        ];
        $response = $this->call('suspend', $params);
        $result = $this->mapArray($response->SuspendResults, ActionResult::class);
        return $result;
    }

    /**
     * @param KeywordUpdateItem[] $Keywords
     *
     * @return ActionResult[]
     */
    public function update(array $Keywords)
    {
        throw new \Exception('Not implemented');
    }

    protected function getName()
    {
        return 'keywords';
    }
}