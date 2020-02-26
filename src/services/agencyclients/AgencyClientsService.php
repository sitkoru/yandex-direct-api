<?php

namespace directapi\services\agencyclients;

use directapi\common\criterias\LimitOffset;
use directapi\common\enum\clients\ClientFieldEnum;
use directapi\common\models\clients\ClientGetItem;
use directapi\common\results\ActionResult;
use directapi\DirectApiService;
use directapi\exceptions\DirectAccountNotExistException;
use directapi\exceptions\DirectApiException;
use directapi\exceptions\DirectApiNotEnoughUnitsException;
use directapi\exceptions\LoginIsUsedAlreadyException;
use directapi\exceptions\RequestValidationException;
use directapi\services\agencyclients\criterias\AgencyClientsSelectionCriteria;
use directapi\services\agencyclients\results\AgencyClientAddResult;
use directapi\services\BaseService;
use directapi\services\agencyclients\models\AgencyClientAdd;
use GuzzleHttp\Exception\GuzzleException;
use JsonMapper_Exception;

class AgencyClientsService extends BaseService
{
    public function __construct(DirectApiService $service)
    {
        parent::__construct($service);
        $this->sendClientLogin = false;
    }

    /**
     * @param AgencyClientsSelectionCriteria $SelectionCriteria
     * @param ClientFieldEnum[]              $FieldNames
     * @param LimitOffset|null               $Page
     * @return ClientGetItem[]
     * @throws GuzzleException
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws RequestValidationException
     */
    public function get(
        AgencyClientsSelectionCriteria $SelectionCriteria,
        array $FieldNames,
        LimitOffset $Page = null
    ): array {
        $params = [
            'SelectionCriteria' => $SelectionCriteria,
            'FieldNames'        => $FieldNames
        ];

        if ($Page) {
            $params['Page'] = $Page;
        }

        return parent::doGet($params, 'Clients', ClientGetItem::class);
    }

    /**
     * @param array $entities
     * @return array
     * @throws \ErrorException
     */
    public function toUpdateEntities(array $entities): array
    {
        throw new \ErrorException('Not implemented');
    }

    /**
     * @param AgencyClientAdd $agencyClientAdd
     * @return array|AgencyClientAddResult[]
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws GuzzleException
     * @throws JsonMapper_Exception
     * @throws LoginIsUsedAlreadyException
     * @throws RequestValidationException
     */
    public function add(AgencyClientAdd $agencyClientAdd)
    {
        $params = [
            'Login' => $agencyClientAdd->Login,
            'FirstName' => $agencyClientAdd->FirstName,
            'LastName' => $agencyClientAdd->LastName,
            'Currency' => $agencyClientAdd->Currency,
            'Grants' => $agencyClientAdd->Grants,
            'Notification' => $agencyClientAdd->Notification,
            'Settings' => $agencyClientAdd->Settings
        ];

        return $this->doAdd($params, AgencyClientAddResult::class);
    }

    /**
     * @param array $params
     * @param string $class
     * @return array
     * @throws GuzzleException
     * @throws JsonMapper_Exception
     * @throws DirectAccountNotExistException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     * @throws LoginIsUsedAlreadyException
     * @throws RequestValidationException
     */
    protected function doAdd(array $params, string $class = ActionResult::class): array
    {
        $response = $this->call('add', $params);
        return $this->mapArray([$response], $class);
    }

    protected function getName(): string
    {
        return 'agencyclients';
    }
}
