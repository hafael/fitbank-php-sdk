<?php

namespace Hafael\Fitbank;

use Hafael\Fitbank\Api\Account;
use Hafael\Fitbank\Api\Boleto;
use Hafael\Fitbank\Api\User;
use Hafael\Fitbank\Handler\Curl;
use Hafael\Fitbank\Handler\Http;
use Hafael\Fitbank\Contracts\RouteInterface;
use Hafael\Fitbank\Contracts\ClientInterface;
use Hafael\Fitbank\Exceptions\ClientException;

/**
 * @method Account account()
 * @method User users()
 */
class Client implements ClientInterface
{
    /**
     * @var string
     */
    const SANDBOX_ENDPOINT = 'https://sandboxapi.fitbank.com.br/main/execute';

    /**
     * @var string
     */
    const PRODUCTION_ENDPOINT = 'https://sandboxapi.fitbank.com.br/main/execute';

    /**
     * @var array
     */
    const API_RESOURCES = [
        'account' => Account::class,
        'users'   => User::class,
        'boleto'   => Boleto::class,
    ];

    /**
     * @var string
     */
    private $baseUrl;

    /**
     * @var int
     */
    private $partnerId;

    /**
     * @var int
     */
    private $businessUnitId;

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var int
     */
    private $mktPlaceId;

    /**
     * @var string
     */
    private $taxNumber;
    
    /**
     * The Client (not Eastwood)
     * 
     * @param string $apiKey
     * @param string $apiSecret
     * @param int $partnerId
     * @param int $businessUnitId
     * @param int $mktPlaceId
     * @param string $taxNumber
     * @param string $baseUrl
     */
    public function __construct(string $apiKey, string $apiSecret, int $partnerId, int $businessUnitId, int $mktPlaceId, string $taxNumber, string $baseUrl = self::SANDBOX_ENDPOINT)
    {
        $this->setApiKey($apiKey);
        $this->setApiSecret($apiSecret);
        $this->setMktPlaceId($mktPlaceId);
        $this->setTaxNumber($taxNumber);
        $this->setBaseUrl($baseUrl);
        $this->setPartnerId($partnerId);
        $this->setBusinessUnitId($businessUnitId);
    }

    /**
     * @return Client
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @return Client
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @return Client
     */
    public function setApiSecret($apiSecret)
    {
        $this->apiSecret = $apiSecret;
        return $this;
    }

    /**
     * @return string
     */
    public function getApiSecret()
    {
        return $this->apiSecret;
    }

    /**
     * @param int $partnerId
     * @return Client
     */
    public function setPartnerId(int $partnerId)
    {
        $this->partnerId = $partnerId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @param int $businessUnitId
     * @return Client
     */
    public function setBusinessUnitId($businessUnitId)
    {
        $this->businessUnitId = $businessUnitId;
        return $this;
    }

    /**
     * @return int
     */
    public function getBusinessUnitId()
    {
        return $this->businessUnitId;
    }

    /**
     * @param int $mktPlaceId
     * @return Client
     */
    public function setMktPlaceId($mktPlaceId)
    {
        $this->mktPlaceId = $mktPlaceId;
        return $this;
    }

    /**
     * @return int
     */
    public function getMktPlaceId()
    {
        return $this->mktPlaceId;
    }

    /**
     * @param string $taxNumber
     * @return Client
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * GET REQUEST
     * 
     * @method GET
     * @param RouteInterface $route
     * @param array $params
     * @param array $headers
     * @return string
     */
    public function get(RouteInterface $route, $params = [], $headers = [])
    {
        return $this->buildRequest($route, Http::GET, $params, $headers)
                    ->send();
    }

    /**
     * POST REQUEST
     * 
     * @method POST
     * @param RouteInterface $route
     * @param array $data
     * @param array $headers
     * @return string
     */
    public function post(RouteInterface $route, $data, $headers = [])
    {
        return $this->buildRequest($route, Http::POST, [], $data, $headers)
                    ->send();
    }

    /**
     * PUT REQUEST
     * 
     * @method PUT
     * @param RouteInterface $route
     * @param array $data
     * @param array $headers
     * @return string
     */
    public function put(RouteInterface $route, $data, $headers = [])
    {
        return $this->buildRequest($route, Http::PUT, [], $data, $headers)
                    ->send();
    }

    /**
     * PATCH REQUEST
     * 
     * @method PATCH
     * @param RouteInterface $route
     * @param array $data
     * @param array $headers
     * @return string
     */
    public function patch(RouteInterface $route, $data, $headers = [])
    {
        return $this->buildRequest($route, Http::PATCH, [], $data, $headers)
                    ->send();
    }

    /**
     * DELETE REQUEST
     * 
     * @method DELETE
     * @param RouteInterface $route
     * @param array $headers
     * @return string
     */
    public function delete(RouteInterface $route, $data = [], $headers = [])
    {
        return $this->buildRequest($route, Http::DELETE, [], $data, $headers)
                    ->send();
    }

    /**
     * Preparing request
     * 
     * @param RouteInterface $route
     * @param $method
     * @param array $params
     * @param array $data
     * @param array $headers
     * @return Curl
     */
    public function buildRequest(RouteInterface $route, $method, $params = [], $data = [], $headers = [])
    {
        $resource = new Curl();
        $query = $this->query($params);
        $resource->addHeader('Cache-control: no-cache');
        //$resource->addHeader('Content-type: application/json');
        $resource->setBasicAuthorization($this->getApiKey(), $this->getApiSecret());

        $resource->setMethod($method);
        $url = sprintf('%s%s%s', $this->baseUrl, $route->build(), $query);

        $resource->setUrl($url);

        if(! empty($data)) {
            $resource->setBody(array_merge($data, [
                'PartnerId' => $this->getPartnerId(),
                'BusinessUnitId' => $this->getBusinessUnitId(),
                'MktPlaceId' => $this->getMktPlaceId(),
            ]));
        }

        if(!empty($headers))
        {
            $resource->addHeaders($headers);
        }

        return $resource;
    }

    /**
     * Parse query string from array
     * 
     * @param $params
     * @return string
     */
    public function query($params)
    {
        $query = '';
        if(! empty($params)) {
            $query = '?' . http_build_query($params);
        }
        return $query;
    }

    /**
     * Magic methods
     * 
     * @param string $name
     * @param array $args
     * @return mixed
     * @throws ClientException
     */
    public function __call(string $name, array $args)
    {
        return $this->{$name};
    }

    /**
     * Magic methods
     * 
     * @param $name
     * @return mixed
     * @throws ClientException
     */
    public function __get($name)
    {
        if(!array_key_exists(strtolower($name), static::API_RESOURCES)) {
            throw new ClientException(sprintf('API Resource not exists: %s', $name));
        }

        $class = static::API_RESOURCES[$name];

        return new $class($this);
    }
}