<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\TopUpRequest;
use Hafael\Fitbank\Route;

class TopUp extends Api
{

    /**
     * GetTopUpProducts
     * 
     * @param int $type
     * @param string $subType
     * @param float $value
     * @return mixed
     */
    public function getTopUpProducts($type, $subType, $value)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetTopUpProducts',
            'ProductType'    => $type,
            'ProductSubType' => $subType,
            'ProductValue'   => $value,
        ]));
    }

    /**
     * GetTopUpProducts
     * 
     * @param TopUpRequest $request
     * @return mixed
     */
    public function generateTopUp(TopUpRequest $request)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GenerateTopUp',
        ], $request->toArray())));
    }

    /**
     * GetTopUpById
     * 
     * @param int|string $documentNumber
     * @param string $originNSU
     * @return mixed
     */
    public function getTopUpById($documentNumber, $originNSU)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetTopUpById',
            'DocumentNumber' => $documentNumber,
            'OriginNSU'      => $originNSU,
        ]));
    }

    /**
     * AuthorizeTopUp
     * 
     * @param int|string $documentNumber
     * @param string $originNSU
     * @return mixed
     */
    public function authorizeTopUp($documentNumber, $originNSU)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'AuthorizeTopUp',
            'DocumentNumber' => $documentNumber,
            'OriginNSU'      => $originNSU,
        ]));
    }

}