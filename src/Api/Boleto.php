<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\Boleto as BoletoModel;
use Hafael\Fitbank\Route;

class Boleto extends Api
{

    /**
     * GenerateBoleto
     * 
     * @param BoletoModel $user
     * @return mixed
     */
    public function generateBoleto(BoletoModel $boleto)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GenerateBoleto',
        ], $boleto->toArray())));
    }

    /**
     * GetBoletoById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getBoletoById($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetBoletoById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetBoletoByDate
     * 
     * @param string $initialDate
     * @param string $finalDate
     * @param string $receiverTaxNumber
     * @param int $status
     * @return mixed
     */
    public function getBoletoByDate($initialDate, $finalDate, $receiverTaxNumber, $status)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'            => 'GetBoletoByDate',
            'InicialDate'       => $initialDate,
            'FinalDate'         => $finalDate,
            'RecieverTaxNumber' => $receiverTaxNumber,
            'Status'            => $status,
        ]));
    }

    /**
     * CancelBoleto
     * 
     * @param string $documentNumber
     * @param int $mktPlaceId
     * @return mixed
     */
    public function cancelBoleto($documentNumber, $mktPlaceId)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'CancelBoleto',
            'DocumentNumber' => $documentNumber,
            'MktPlaceId'     => $mktPlaceId,
        ]));
    }

}