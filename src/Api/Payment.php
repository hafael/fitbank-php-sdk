<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\Boleto as BoletoModel;
use Hafael\Fitbank\Models\BoletoOut;
use Hafael\Fitbank\Route;

class Payment extends Api
{

    /**
     * GetPayments
     * 
     * @param string $initialDate
     * @param string $finalDate
     * @param string $taxNumber
     * @return mixed
     */
    public function getPayments($initialDate, $finalDate, $taxNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'      => 'GetPayments',
            'InicialDate' => $initialDate,
            'FinalDate'   => $finalDate,
            'TaxNumber'   => $taxNumber,
        ]));
    }

    /**
     * GetBoletoOutById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getBoletoOutById($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetBoletoOutById',
            'DocumentNumber' => $documentNumber,
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
            'Method'  => 'GetBoletoOutByBarcode',
            'Barcode' => $barcodeNumber,
        ]));
    }

    /**
     * GetDARFOutById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getDARFOutById($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetDARFOutById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetGAREOutById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getGAREOutById($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetGAREOutById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetGPSOutById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getGPSOutById($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetGPSOutById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetDARJOutById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getDARJOutById($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetDARJOutById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetFGTSOutById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getFGTSOutById($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetFGTSOutById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetDARFOutByInformations
     * 
     * @param string $principalValue
     * @param string $dueDate
     * @param string $taxContributor
     * @param string $referenceNumber
     * @param string $calculationPeriod
     * @return mixed
     */
    public function getDARFOutByInformations($principalValue, $dueDate, $taxContributor, $referenceNumber, $calculationPeriod)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetDARFOutByInformations',
            'PrincipalValue' => $principalValue,
            'DueDate' => $dueDate,
            'TaxContributor' => $taxContributor,
            'ReferenceNumber' => $referenceNumber,
            'CalculationPeriod' => $calculationPeriod,
        ]));
    }

    /**
     * ExpectedDatePayment
     * 
     * @param string $barcode
     * @param string $actualDatePayment
     * @return mixed
     */
    public function expectedDatePayment($barcode, $actualDatePayment)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'ExpectedDatePayment',
            'BarCode' => $barcode,
            'ActualDatePayment' => $actualDatePayment,
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
     * CancelBoletoOut
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelBoletoOut($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'CancelBoletoOut',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * CancelPaymentGPS
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelPaymentGPS($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'CancelPaymentGPS',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * CancelPaymentGARE
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelPaymentGARE($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'CancelPaymentGARE',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * CancelPaymentFGTS
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelPaymentFGTS($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'CancelPaymentFGTS',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * CancelPaymentDARJ
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelPaymentDARJ($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'CancelPaymentDARJ',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * CancelPaymentDARF
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelPaymentDARF($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'CancelPaymentDARF',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GenerateBoletoOut
     * 
     * @param GenerateBoletoOut $boleto
     * @return mixed
     */
    public function generateBoletoOut(BoletoOut $boleto)
    {
        
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GenerateBoletoOut',
        ], $boleto->toArray())));
    }

}