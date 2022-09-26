<?php

namespace Hafael\Fitbank\Models;

class PixOut
{
    const STATUS_CREATED           = 0;
    const STATUS_CAN_BE_REGISTER   = 1;
    const STATUS_REGISTERING       = 2;
    const STATUS_REGISTERED        = 3;
    const STATUS_ERROR             = 4;
    const STATUS_SETTLED           = 5;
    const STATUS_CANCELED          = 6;
    const STATUS_AWAITING_ANALYSIS = 7;
    const STATUS_AWAITING_REFUND = 8;

    const STATUS_LABEL = [
        self::STATUS_CREATED           => 'Created',
        self::STATUS_CAN_BE_REGISTER   => 'CanBeRegister',
        self::STATUS_REGISTERING       => 'Registering',
        self::STATUS_REGISTERED        => 'Registered',
        self::STATUS_ERROR             => 'Error',
        self::STATUS_SETTLED           => 'Settled',
        self::STATUS_CANCELED          => 'Canceled',
        self::STATUS_AWAITING_ANALYSIS => 'AwaitingAnalysis',
        self::STATUS_AWAITING_REFUND   => 'AwaitingRefund',
    ];

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var string
     */
    public $bank;

    /**
     * @var string
     */
    public $bankBranch;

    /**
     * @var string
     */
    public $bankAccount;
    
    /**
     * @var string
     */
    public $bankAccountDigit;

    /**
     * @var PixKey
     */
    public $toKey;

    /**
     * @var int
     */
    public $accountType;

    /**
     * @var string
     */
    public $paymentDate;
    
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
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $searchProtocol;

    /**
     * @var string
     */
    public $customerMessage;
    
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
        if(isset($data['bank'])) {
            $this->bank($data['bank']);
        }
        if(isset($data['bankBranch'])) {
            $this->bankBranch($data['bankBranch']);
        }
        if(isset($data['bankAccount'])) {
            $this->bankAccount($data['bankAccount']);
        }
        if(isset($data['bankAccountDigit'])) {
            $this->bankAccountDigit($data['bankAccountDigit']);
        }
        if(isset($data['toKey'])) {
            $this->toKey($data['toKey']);
        }
        if(isset($data['paymentDate'])) {
            $this->paymentDate($data['paymentDate']);
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
        if(isset($data['description'])) {
            $this->description($data['description']);
        }
        if(isset($data['searchProtocol'])) {
            $this->searchProtocol($data['searchProtocol']);
        }
        if(isset($data['customerMessage'])) {
            $this->customerMessage($data['customerMessage']);
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
     * @param string $bank
     */
    public function bank(string $bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @param string $bankBranch
     */
    public function bankBranch(string $bankBranch)
    {
        $this->bankBranch = str_pad($bankBranch, 4, '0', STR_PAD_LEFT);
        return $this;
    }

    /**
     * @param string $bankAccount
     */
    public function bankAccount(string $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @param string $bankAccountDigit
     */
    public function bankAccountDigit(string $bankAccountDigit)
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @param PixKey $toKey
     */
    public function toKey(PixKey $toKey)
    {
        $this->toKey = $toKey;
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
     * @param string $identifier
     */
    public function identifier(string $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @param string $description
     */
    public function description(string $description)
    {
        $this->description = $description;
        return $this;
    }


    /**
     * @param int $searchProtocol
     */
    public function searchProtocol(int $searchProtocol)
    {
        $this->searchProtocol = $searchProtocol;
        return $this;
    }

    /**
     * @param string $customerMessage
     */
    public function customerMessage(string $customerMessage)
    {
        $this->customerMessage = $customerMessage;
        return $this;
    }

   
    /**
     * All payment read attributes
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            //From
            'Bank'                  => $this->bank,
            'BankBranch'            => $this->bankBranch,
            'BankAccount'           => $this->bankAccount,
            'BankAccountDigit'      => $this->bankAccountDigit,
            
            'TaxNumber'             => $this->taxNumber,
            'InitiationType'        => 0,
            
            //To
            'PixKey'                => $this->toKey->key,
            'PixKeyType'            => $this->toKey->keyType,
            'ToName'                => $this->toKey->name,
            'ToTaxNumber'           => $this->toKey->taxNumber,
            'ToBank'                => $this->toKey->bank,
            'ToBankBranch'          => $this->toKey->bankBranch,
            'ToBankAccount'         => $this->toKey->bankAccount,
            'ToBankAccountDigit'    => $this->toKey->bankAccountDigit,
            'AccountType'           => $this->toKey->accountType,

            //Parameters
            'Value'                 => $this->value,
            'RateValue'             => $this->rateValue,
            'RateValueType'         => $this->rateValueType,
            'Identifier'            => $this->identifier,
            'PaymentDate'           => $this->paymentDate,
            'Description'           => $this->description,
            'SearchProtocol'        => $this->searchProtocol,
            'CustomerMessage'       => $this->customerMessage,
            
        ], function($value) {
            return !is_null($value);
        });
    }
}