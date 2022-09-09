<?php

namespace Hafael\Fitbank\Models;

class DigitalWithdrawal
{

    /**
     * @var string
     */
    public $taxNumber;
    
    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var BankAccount
     */
    public $fromBank;

    /**
     * @var float
     */
    public $rateValue;

    /**
     * @var int
     */
    public $rateValueType;

    /**
     * @var string
     */
    public $nsu;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['fromBank'])) {
            $this->fromBank($data['fromBank']);
        }
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
        if(isset($data['value'])) {
            $this->value($data['value']);
        }
        if(isset($data['identifier'])) {
            $this->identifier($data['identifier']);
        }
        if(isset($data['nsu'])) {
            $this->nsu($data['nsu']);
        }
        if(isset($data['documentNumber'])) {
            $this->documentNumber($data['documentNumber']);
        }
        if(isset($data['rateValue'])) {
            $this->rateValue($data['rateValue']);
        }
        if(isset($data['rateValueType'])) {
            $this->rateValueType($data['rateValueType']);
        }
    }

    /**
     * @param int $documentNumber
     */
    public function documentNumber(int $documentNumber)
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * @param BankAccount $fromBank
     */
    public function fromBank(BankAccount $fromBank)
    {
        $this->fromBank = $fromBank;
        return $this;
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
     * @param float $value
     */
    public function value(float $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param string $identifier
     */
    public function identifier(string $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @param string $nsu
     */
    public function nsu(string $nsu)
    {
        $this->nsu = $nsu;
        return $this;
    }

    /**
     * @param float $rateValue
     */
    public function rateValue(float $rateValue)
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @param int $rateValueType
     */
    public function rateValueType(int $rateValueType)
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'TaxNumber'        => $this->taxNumber,
            'Value'            => $this->value,
            'Identifier'       => $this->identifier,
            'Bank'             => $this->fromBank->bank,
            'BankBranch'       => $this->fromBank->bankBranch,
            'BankAccount'      => $this->fromBank->bankAccount,
            'BankAccountDigit' => $this->fromBank->bankAccountDigit,
            'RateValue'        => $this->rateValue,
            'RateValueType'    => $this->rateValueType,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}