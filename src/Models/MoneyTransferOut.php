<?php

namespace Hafael\Fitbank\Models;

class MoneyTransferOut
{

    const STATUS_CREATED = 0;
    const STATUS_PAID = 1;
    const STATUS_CANCELED = 2;

    /**
     * @var BankAccount
     */
    public $fromBank;

    /**
     * @var BankAccount
     */
    public $toBank;

    /**
     * @var float
     */
    public $value;

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
    public $identifier;

    /**
     * @var array
     */
    public $tags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $paymentDate;

    /**
     * @var int
     */
    public $status;

    
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
        if(isset($data['toBank'])) {
            $this->toBank($data['toBank']);
        }
        if(isset($data['value'])) {
            $this->value($data['value']);
        }
        if(isset($data['rateValue'])) {
            $this->rateValue($data['rateValue']);
        }
        if(isset($data['rateValueType'])) {
            $this->rateValueType($data['rateValueType']);
        }
        if(isset($data['identifier'])) {
            $this->identifier($data['identifier']);
        }
        if(isset($data['tags'])) {
            $this->tags($data['tags']);
        }
        if(isset($data['description'])) {
            $this->description($data['description']);
        }
        if(isset($data['paymentDate'])) {
            $this->paymentDate($data['paymentDate']);
        }
        if(isset($data['status'])) {
            $this->status($data['status']);
        }
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
     * @param int $status
     */
    public function status(int $status)
    {
        $this->status = $status;
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
     * @param array $tags
     */
    public function tags(array $tags)
    {
        $this->tags = $tags;
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
     * @param string $paymentDate
     */
    public function paymentDate(string $paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'FromTaxNumber'        => $this->fromBank->taxNumber,
            'FromBank'             => $this->fromBank->bank,
            'FromBankBranch'       => $this->fromBank->bankBranch,
            'FromBankAccount'      => $this->fromBank->bankAccount,
            'FromBankAccountDigit' => $this->fromBank->bankAccountDigit,
            'ToTaxNumber'          => $this->toBank->taxNumber,
            'ToName'               => $this->toBank->name,
            'Bank'                 => $this->toBank->bank,
            'BankBranch'           => $this->toBank->bankBranch,
            'BankAccount'          => $this->toBank->bankAccount,
            'BankAccountDigit'     => $this->toBank->bankAccountDigit,
            'AccountType'          => $this->toBank->accountType,
            'Value'                => $this->value,
            'RateValue'            => $this->rateValue,
            'RateValueType'        => $this->rateValueType,
            'Identifier'           => $this->identifier,
            'Tags'                 => $this->tags,
            'Description'          => $this->description,
            'PaymentDate'          => $this->paymentDate,
        ], function($value) {
            return !is_null($value);
        });
    }


}