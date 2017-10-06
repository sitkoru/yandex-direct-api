<?php

namespace directapi;

use directapi\components\interfaces\IQueryLogger;
use directapi\exceptions\DirectAccountNotExistException;
use directapi\exceptions\DirectApiException;
use directapi\exceptions\DirectApiNotEnoughUnitsException;
use directapi\exceptions\RequestValidationException;
use directapi\services\adgroups\AdGroupsService;
use directapi\services\adimages\AdImagesService;
use directapi\services\ads\AdsService;
use directapi\services\agencyclients\AgencyClientsService;
use directapi\services\bidmodifiers\BidModifiersService;
use directapi\services\bids\BidsService;
use directapi\services\campaigns\CampaignsService;
use directapi\services\changes\ChangesService;
use directapi\services\clients\ClientsService;
use directapi\services\keywords\KeywordsService;
use directapi\services\reports\ReportsService;
use directapi\services\sitelinks\SitelinksService;
use directapi\services\vcards\VCardsService;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Message\RequestInterface;
use Symfony\Component\Validator\ConstraintViolation;
use Symfony\Component\Validator\Validation;

class DirectApiService
{
    const ERROR_CODE_CONCURRENT_LIMIT = 506;
    const ERROR_CODE_NOT_ENOUGH_UNITS = 152;
    const ERROR_CODE_NOT_EXIST_DIRECT_ACCOUNT = 513;

    private $token;
    private $clientLogin;
    private $apiUrl = 'https://api.direct.yandex.com/json/v5/';

    public $units = 0;
    public $lastCallCost = 0;
    public $unitsLimit = 0;

    /**
     * @var AdGroupsService
     */
    private $adGroupsService;

    /**
     * @var AdImagesService
     */
    private $adImagesService;

    /**
     * @var AdsService
     */
    private $adsService;

    /**
     * @var BidModifiersService
     */
    private $bidModifiersService;

    /**
     * @var BidsService
     */
    private $bidsService;

    /**
     * @var CampaignsService
     */
    private $campaignsService;

    /**
     * @var ChangesService
     */
    private $changesService;

    /**
     * @var KeywordsService
     */
    private $keywordsService;

    /**
     * @var SitelinksService
     */
    private $sitelinksService;

    /**
     * @var VCardsService
     */
    private $vcardsService;

    /**
     * @var ClientsService
     */
    private $clientsService;

    /**
     * @var AgencyClientsService
     */
    private $agencyClientsService;

    /**
     * @var ReportsService
     */
    private $reportsService;

    /**
     * @var IQueryLogger
     */
    private $logger;

    public function __construct($token, $clientLogin, IQueryLogger $logger = null)
    {
        $this->token = $token;
        $this->clientLogin = $clientLogin;
        $this->logger = $logger;
    }

    /**
     * @return AdGroupsService
     */
    public function getAdGroupsService()
    {
        if (!$this->adGroupsService) {
            $this->adGroupsService = new AdGroupsService($this);
        }
        return $this->adGroupsService;
    }

    /**
     * @return AdImagesService
     */
    public function getAdImagesService()
    {
        if (!$this->adImagesService) {
            $this->adImagesService = new AdImagesService($this);
        }
        return $this->adImagesService;
    }

    /**
     * @return AdsService
     */
    public function getAdsService()
    {
        if (!$this->adsService) {
            $this->adsService = new AdsService($this);
        }
        return $this->adsService;
    }

    /**
     * @return BidModifiersService
     */
    public function getBidModifiersService()
    {
        if (!$this->bidModifiersService) {
            $this->bidModifiersService = new BidModifiersService($this);
        }
        return $this->bidModifiersService;
    }

    /**
     * @return BidsService
     */
    public function getBidsService()
    {
        if (!$this->bidsService) {
            $this->bidsService = new BidsService($this);
        }
        return $this->bidsService;
    }

    /**
     * @return CampaignsService
     */
    public function getCampaignsService()
    {
        if (!$this->campaignsService) {
            $this->campaignsService = new CampaignsService($this);
        }
        return $this->campaignsService;
    }

    /**
     * @return ChangesService
     */
    public function getChangesService()
    {
        if (!$this->changesService) {
            $this->changesService = new ChangesService($this);
        }
        return $this->changesService;
    }

    /**
     * @return KeywordsService
     */
    public function getKeywordsService()
    {
        if (!$this->keywordsService) {
            $this->keywordsService = new KeywordsService($this);
        }
        return $this->keywordsService;
    }

    /**
     * @return SitelinksService
     */
    public function getSitelinksService()
    {
        if (!$this->sitelinksService) {
            $this->sitelinksService = new SitelinksService($this);
        }
        return $this->sitelinksService;

    }

    /**
     * @return VCardsService
     */
    public function getVCardsService()
    {
        if (!$this->vcardsService) {
            $this->vcardsService = new VCardsService($this);
        }
        return $this->vcardsService;
    }

    /**
     * @return ClientsService
     */
    public function getClientsService()
    {
        if (!$this->clientsService) {
            $this->clientsService = new ClientsService($this);
        }
        return $this->clientsService;
    }

    /**
     * @return AgencyClientsService
     */
    public function getAgencyClientsService()
    {
        if (!$this->agencyClientsService) {
            $this->agencyClientsService = new AgencyClientsService($this);
        }
        return $this->agencyClientsService;
    }


    /**
     * @return ReportsService
     */
    public function getReportsService()
    {
        if (!$this->reportsService) {
            $this->reportsService = new ReportsService($this);
        }
        return $this->reportsService;
    }

    /**
     * @param string $serviceName
     * @param string $method
     * @param array  $params
     * @param bool   $sendClientLogin
     * @return mixed
     * @throws RequestValidationException
     */
    public function call($serviceName, $method, array $params = [], $sendClientLogin = true)
    {
        $request = new DirectApiRequest();
        $request->service = $serviceName;
        $request->method = $method;
        $request->sendClientLogin = $sendClientLogin;

        if ($params) {
            $errors = [];
            $this->validate($params, $errors);
            if ($errors) {
                throw new RequestValidationException($errors);
            }
            $request->params = $params;
        }


        $data = $this->getResponse($request);
        return $data->getData()->result;
    }

    private $validator;

    /**
     * @return \Symfony\Component\Validator\Validator\ValidatorInterface
     */
    private function getValidator()
    {
        if (!$this->validator) {

            $this->validator = Validation::createValidatorBuilder()
                ->enableAnnotationMapping()
                ->getValidator();

        }
        return $this->validator;
    }

    public function validate($params, &$errors)
    {
        if (is_array($params) || is_object($params)) {
            foreach ($params as $key => $value) {
                if (!is_array($value) && !is_object($value)) {
                    continue;
                }
                $result = $this->getValidator()->validate($value, null, true);
                if ($result) {
                    foreach ($result as $error) {
                        if (!isset($errors[$key])) {
                            $errors[$key] = [];
                        }
                        /**
                         * @var ConstraintViolation $error
                         */
                        $errors[$key][$error->getPropertyPath()] = $error->getMessage();
                    }
                }
            }
        }
    }

    private function getClient()
    {
        return new Client();
    }

    /**
     * @param        $url
     * @param string $method
     * @param bool   $sendClientLogin
     * @return RequestInterface
     */
    public function getRequest($url, $method = 'POST', $sendClientLogin = true)
    {
        return new Request($method, $url, $this->getRequestHeaders($sendClientLogin));
    }

    private function getRequestHeaders($sendClientLogin)
    {
        $headers = [
            'Content-Type'    => 'application/json; charset=utf-8',
            'Authorization'   => 'Bearer ' . $this->token,
            'Accept-Language' => 'ru',
        ];
        if ($this->clientLogin && $sendClientLogin) {
            $headers['Client-Login'] = $this->clientLogin;
        }
        return $headers;
    }

    /**
     * @param RequestInterface $request
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function doRequest(RequestInterface $request)
    {
        return $this->getClient()->send($request);
    }

    /**
     * @var \JsonMapper
     */
    private $mapper;

    /**
     * @return \JsonMapper
     */
    public function getMapper()
    {
        if (!$this->mapper) {
            $this->mapper = new \JsonMapper();
            $this->mapper->bStrictNullTypes = false;
        }

        return $this->mapper;
    }

    /**
     * @param DirectApiRequest $request
     * @return DirectApiResponse
     * @throws \directapi\exceptions\DirectAccountNotExistException
     * @throws \RuntimeException
     * @throws \InvalidArgumentException
     * @throws DirectApiException
     * @throws DirectApiNotEnoughUnitsException
     */
    public function getResponse(DirectApiRequest $request)
    {
        $this->lastCallCost = null;
        $httpRequest = $this->getRequest($this->apiUrl . $request->service, 'POST', $request->sendClientLogin);

        $payload = json_encode($request->getPayload(), JSON_UNESCAPED_UNICODE);
        $payload = preg_replace('/,\s*"[^"]+":null|"[^"]+":null,?/', '', $payload);

        $httpResponse = $this->doRequest($httpRequest->withBody(\GuzzleHttp\Psr7\stream_for($payload)));

        $response = new DirectApiResponse();

        $response->setHeaders($httpResponse->getHeaders());
        $response->body = $httpResponse->getBody()->getContents();
        $data = $response->getData();

        $this->units = $response->units;
        $this->lastCallCost = $response->lastCallCost;
        $this->unitsLimit = $response->unitsLimit;


        if (isset($data->error)) {
            $response->isSuccess = false;
            if ((int)$data->error->error_code === self::ERROR_CODE_CONCURRENT_LIMIT) //concurrent limit
            {
                usleep(100);
                $this->logRequest($request, $response);
                return $this->getResponse($request);
            }
            if ($this->logger) {
                $this->logRequest($request, $response);
            }
            if ((int)$data->error->error_code === self::ERROR_CODE_NOT_EXIST_DIRECT_ACCOUNT){
                throw new DirectAccountNotExistException($data->error->error_string . ' ' . $data->error->error_detail . ' (' . $request->service . ', ' . $request->method . ')',
                    $data->error->error_code);
            }
            if ((int)$data->error->error_code === self::ERROR_CODE_NOT_ENOUGH_UNITS) {
                throw new DirectApiNotEnoughUnitsException($data->error->error_string . ' ' . $data->error->error_detail . ' (' . $request->service . ', ' . $request->method . ')',
                    $data->error->error_code);
            }
            throw new DirectApiException($data->error->error_string . ' ' . $data->error->error_detail . ' (' . $request->service . ', ' . $request->method . ')',
                $data->error->error_code);
        }
        $response->isSuccess = true;
        if (!is_object($data)) {
            $this->logRequest($request, $response);
            throw new DirectApiException('Ошибка при получении данных кампании (' . $request->service . ', ' . $request->method . ')' . var_export($request->params,
                    true));
        }
        $this->logRequest($request, $response);
        return $response;
    }

    public function logRequest(DirectApiRequest $request, DirectApiResponse $response)
    {
        if ($this->logger) {
            $this->logger->logRequest($request, $response);
        }
    }
}