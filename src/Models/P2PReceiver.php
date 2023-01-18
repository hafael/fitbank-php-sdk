<?php

namespace Hafael\Fitbank\Models;

class P2PReceiver
{

    /**
     * @var string
     */
    public $toName;

    /**
     * @var BankAccount
     */
    public $toBank;

    /**
     * @var string
     */
    public $toTaxNumber;
    
    /**
     * @var float
     */
    public $value;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $description;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['toTaxNumber'])) {
            $this->toTaxNumber($data['toTaxNumber']);
        }
        if(isset($data['toBank'])) {
            $this->toBank($data['toBank']);
        }
        if(isset($data['value'])) {
            $this->value($data['value']);
        }
        if(isset($data['description'])) {
            $this->description($data['description']);
        }
        if(isset($data['identifier'])) {
            $this->identifier($data['identifier']);
        }
    }

    /**
     * @param string $identifier
     */
    public function identifier(int $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @param string $toName
     */
    public function toName(int $toName)
    {
        $this->toName = $toName;
        return $this;
    }

    /**
     * @param string $toTaxNumber
     */
    public function toTaxNumber(string $toTaxNumber)
    {
        $this->toTaxNumber = $toTaxNumber;
        return $this;
    }

    /**
     * @param BankAccount $toBank
     */
    public function toBank(BankAccount $toBank)
    {
        $this->toBank = $toBank;
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
     * @param string $description
     */
    public function description(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'ToName'             => $this->toName,
            'ToTaxNumber'        => !empty($this->toBank->taxNumber) ? $this->toBank->taxNumber : $this->toTaxNumber,
            'ToBank'             => $this->toBank->bank,
            'ToBankBranch'       => $this->toBank->bankBranch,
            'ToBankAccount'      => $this->toBank->bankAccount,
            'ToBankAccountDigit' => $this->toBank->bankAccountDigit,
            'Value'              => $this->value,
            'Description'        => $this->description,
            'Identifier'         => $this->identifier,
        ], function($value) {
            return !is_null($value);
        });
    }


}