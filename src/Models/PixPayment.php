<?php

namespace Hafael\Fitbank\Models;

class PixPayment
{

    const TYPE_SOCIAL_SECURITY = 0;
    const TYPE_TAX_NUMBER = 1;
    const TYPE_EMAIL = 2;
    const TYPE_PHONE_NUMBER = 3;
    const TYPE_RANDOM_KEY_CODE = 4;

    const STATUS_CREATED = 0;
    const STATUS_REGISTERING = 1;
    const STATUS_REGISTERED = 2;
    const STATUS_DISABLED = 3;
    const STATUS_CANCELED = 4;
    const STATUS_ERROR = 5;
    //Portability status
    const STATUS_CLAIMING = 6;
    const STATUS_ERROR_OWNERSHIP = 7;
    const STATUS_ERROR_PORTABILITY = 8;

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
     * @var bool
     */
    public $onlineTransfer;

    /**
     * @var int
     */
    public $searchProtocol;

    /**
     * @var string
     */
    public $customerMessage;

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
        if(isset($data['onlineTransfer'])) {
            $this->onlineTransfer($data['onlineTransfer']);
        }
        if(isset($data['searchProtocol'])) {
            $this->searchProtocol($data['searchProtocol']);
        }
        if(isset($data['customerMessage'])) {
            $this->customerMessage($data['customerMessage']);
        }
        if(isset($data['status'])) {
            $this->status($data['status']);
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
        $this->bankBranch = $bankBranch;
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
     * @param bool $onlineTransfer
     */
    public function onlineTransfer(bool $onlineTransfer)
    {
        $this->onlineTransfer = $onlineTransfer;
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
     * @param int $status
     */
    public function status(int $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            //From
            'PixKey'               => $this->toKey->key,
            'PixKeyType'           => $this->toKey->keyType,
            'Bank'                 => $this->bank,
            'BankBranch'           => $this->bankBranch,
            'BankAccount'          => $this->bankAccount,
            'BankAccountDigit'     => $this->bankAccountDigit,
            'TaxNumber'            => $this->taxNumber,
            //To
            'ToName'               => $this->toKey->name,
            'ToTaxNumber'          => $this->toKey->taxNumber,
            'ToBank'               => $this->toKey->bank,
            'ToBankBranch'         => $this->toKey->bankBranch,
            'ToBankAccount'        => $this->toKey->bankAccount,
            'ToBankAccountDigit'   => $this->toKey->bankAccountDigit,
            'AccountType'          => $this->toKey->accountType,
            //Parameters
            'Value'                => $this->value,
            'RateValue'            => $this->rateValue,
            'RateValueType'        => $this->rateValueType,
            'Identifier'           => $this->identifier,
            'PaymentDate'          => $this->paymentDate,
            'Description'          => $this->description,
            'OnlineTransfer'       => $this->onlineTransfer,
            'SearchProtocol'       => $this->searchProtocol,
            'CustomerMessage'      => $this->customerMessage,
            //Condition
            'Status'               => $this->status,
        ], function($value) {
            return !is_null($value);
        });
    }

    public function toFilteredExampleFields()
    {
        return array_filter($this->toArray(), function($k) {
            return in_array($k, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }
}