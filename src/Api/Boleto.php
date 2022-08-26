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
     * @return mixed
     */
    public function cancelBoleto($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'CancelBoleto',
            'DocumentNumber' => $documentNumber,
            'MktPlaceId'     => $this->client->getMktPlaceId(),
        ]));
    }

    /**
     * GetInfosByBarcode
     * 
     * @param string $barcodeNumber
     * @return mixed
     */
    public function getInfosByBarcode($barcodeNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetInfosByBarcode',
            'Barcode' => $barcodeNumber,
        ]));
    }

    /**
     * GetInfosCIPByBarcode
     * 
     * @param string $barcodeNumber
     * @param string $taxNumber
     * @return mixed
     */
    public function getInfosCIPByBarcode($barcodeNumber, $taxNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'    => 'GetInfosCIPByBarcode',
            'Barcode'   => $barcodeNumber,
            'TaxNumber' => $taxNumber
        ]));
    }

    /**
     * GetBoletoOutByBarcode
     * 
     * @param string $barcodeNumber
     * @return mixed
     */
    public function getBoletoOutByBarcode($barcodeNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'    => 'GetBoletoOutByBarcode',
            'Barcode'   => $barcodeNumber
        ]));
    }

}