<?php

namespace Hafael\Fitbank\Models;

class DigitalWithdrawalQrCode
{

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var string
     */
    public $documentNumber;

    /**
     * @var string
     */
    public $hashCode;

    /**
     * @var string
     */
    public $originNsu;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
        if(isset($data['documentNumber'])) {
            $this->documentNumber($data['documentNumber']);
        }
        if(isset($data['originNsu'])) {
            $this->originNsu($data['originNsu']);
        }
        if(isset($data['hashCode'])) {
            $this->hashCode($data['hashCode']);
        }
    }

    /**
     * @param string $taxNumber
     */
    public function taxNumber(string $taxNumber)
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @param string $documentNumber
     */
    public function documentNumber(string $documentNumber)
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * @param string $originNsu
     */
    public function originNsu(string $originNsu)
    {
        $this->originNsu = $originNsu;
        return $this;
    }

    /**
     * @param string $hashCode
     */
    public function hashCode(string $hashCode)
    {
        $this->hashCode = $hashCode;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'TaxNumber'      => $this->taxNumber,
            'DocumentNumber' => $this->documentNumber,
            'OriginNSU'      => $this->originNsu,
            'HashCode'       => $this->hashCode,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}