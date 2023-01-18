<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\Boleto as BoletoModel;
use Hafael\Fitbank\Models\BoletoOut;
use Hafael\Fitbank\Models\PaymentDARF;
use Hafael\Fitbank\Models\PaymentDARJ;
use Hafael\Fitbank\Models\PaymentFGTS;
use Hafael\Fitbank\Models\PaymentGARE;
use Hafael\Fitbank\Models\PaymentGPS;
use Hafael\Fitbank\Models\PaymentGRU;
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
            'Method'  => 'GetDarfOutById',
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
            'Method'  => 'GetGareOutById',
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
            'Method'  => 'GetGpsOutById',
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
            'Method'  => 'GetDarjOutById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetFgtsOutById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getFGTSOutById($documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'  => 'GetFgtsOutById',
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
            'Method'  => 'GetDarfOutByInformations',
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
            'Method'  => 'CancelPaymentGps',
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
            'Method'  => 'CancelPaymentGare',
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
            'Method'  => 'CancelPaymentFgts',
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
            'Method'  => 'CancelPaymentDarj',
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
            'Method'  => 'CancelPaymentDarf',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GenerateBoletoOut
     * 
     * @param BoletoOut $boleto
     * @return mixed
     */
    public function generateBoletoOut(BoletoOut $boleto)
    {
        
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GenerateBoletoOut',
        ], $boleto->toArray())));
    }

    /**
     * GeneratePaymentFGTS
     * 
     * @param PaymentFGTS $payment
     * @return mixed
     */
    public function generatePaymentFGTS(PaymentFGTS $payment)
    {
        
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GeneratePaymentFGTS',
        ], $payment->toArray())));
    }

    /**
     * GeneratePaymentDARF
     * 
     * @param PaymentDARF $payment
     * @return mixed
     */
    public function generatePaymentDARF(PaymentDARF $payment)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GeneratePaymentDARF',
        ], $payment->toArray())));
    }

    /**
     * GeneratePaymentGARE
     * 
     * @param PaymentGARE $payment
     * @return mixed
     */
    public function generatePaymentGARE(PaymentGARE $payment)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GeneratePaymentGARE',
        ], $payment->toArray())));
    }

    /**
     * GeneratePaymentDARJ
     * 
     * @param PaymentDARJ $payment
     * @return mixed
     */
    public function generatePaymentDARJ(PaymentDARJ $payment)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GeneratePaymentDARJ',
        ], $payment->toArray())));
    }

    /**
     * GeneratePaymentGPS
     * 
     * @param PaymentGPS $payment
     * @return mixed
     */
    public function generatePaymentGPS(PaymentGPS $payment)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GeneratePaymentGPS',
        ], $payment->toArray())));
    }

    /**
     * GeneratePaymentGRU
     * 
     * @param PaymentGRU $payment
     * @return mixed
     */
    public function generatePaymentGRU(PaymentGRU $payment)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GeneratePaymentGRU',
        ], $payment->toArray())));
    }

}