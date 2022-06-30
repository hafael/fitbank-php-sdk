<?php

namespace Hafael\Fitbank\Models;

class PixCollect
{

    const STATUS_CREATED     = 0;
    const STATUS_PROCESSED   = 1;
    const STATUS_ERROR       = 2;
    const STATUS_CANCELED    = 3;
    const STATUS_REGISTERING = 4;
    const STATUS_EXPIRED     = 5;

    const STATUS_LABEL = [
        self::STATUS_CREATED     => 'Created',
        self::STATUS_PROCESSED   => 'Processed',
        self::STATUS_ERROR       => 'Error',
        self::STATUS_CANCELED    => 'Canceled',
        self::STATUS_REGISTERING => 'Registering',
        self::STATUS_EXPIRED     => 'Expired',
    ];

    /**
     * @var string
     */
    public $pixKey;
    
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
     * @var int
     */
    public $changeType;

    /**
     * @var boolean
     */
    public $reusable;
    
    /**
     * @var float
     */
    public $principalValue;

    /**
     * @var float
     */
    public $interestValue;

    /**
     * @var int
     */
    public $interest;

    /**
     * @var float
     */
    public $rebateValue;

    /**
     * @var float
     */
    public $fineValue;

    /**
     * @var array
     */
    public $additionalData;

    /**
     * @var string
     */
    public $payerRequest;

    /**
     * @var string
     */
    public $expirationDate;

    /**
     * @var int
     */
    public $transactionPurpose;

    /**
     * @var int
     */
    public $transactionValue;

    /**
     * @var int
     */
    public $transactionChangeType;

    /**
     * @var int
     */
    public $agentModality;

    /**
     * @var Address
     */
    public $address;

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
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $revision;
    
    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['pixKey'])) {
            $this->pixKey($data['pixKey']);
        }
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
        if(isset($data['status'])) {
            $this->status($data['status']);
        }
        if(isset($data['payerName'])) {
            $this->payerName($data['payerName']);
        }
        if(isset($data['payerTaxNumber'])) {
            $this->payerTaxNumber($data['payerTaxNumber']);
        }
        if(isset($data['changeType'])) {
            $this->changeType($data['changeType']);
        }
        if(isset($data['reusable'])) {
            $this->reusable($data['reusable']);
        }
        if(isset($data['principalValue'])) {
            $this->principalValue($data['principalValue']);
        }
        if(isset($data['interestValue'])) {
            $this->interestValue($data['interestValue']);
        }
        if(isset($data['interest'])) {
            $this->interest($data['interest']);
        }
        if(isset($data['rebateValue'])) {
            $this->rebateValue($data['rebateValue']);
        }
        if(isset($data['fineValue'])) {
            $this->fineValue($data['fineValue']);
        }
        if(isset($data['additionalData'])) {
            $this->additionalData($data['additionalData']);
        }
        if(isset($data['payerRequest'])) {
            $this->payerRequest($data['payerRequest']);
        }
        if(isset($data['expirationDate'])) {
            $this->expirationDate($data['expirationDate']);
        }
        if(isset($data['transactionPurpose'])) {
            $this->transactionPurpose($data['transactionPurpose']);
        }
        if(isset($data['transactionValue'])) {
            $this->transactionValue($data['transactionValue']);
        }
        if(isset($data['transactionChangeType'])) {
            $this->transactionChangeType($data['transactionChangeType']);
        }
        if(isset($data['agentModality'])) {
            $this->agentModality($data['agentModality']);
        }
        if(isset($data['address'])) {
            $this->address($data['address']);
        }
    }

    /**
     * @param string $pixKey
     */
    public function pixKey(string $pixKey)
    {
        $this->pixKey = $pixKey;
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
     * @param int $status
     */
    public function status(int $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param string $payerName
     */
    public function payerName(string $payerName)
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @param string $payerTaxNumber
     */
    public function payerTaxNumber(string $payerTaxNumber)
    {
        $this->payerTaxNumber = $payerTaxNumber;
        return $this;
    }

    /**
     * @param int $changeType
     */
    public function changeType(int $changeType)
    {
        $this->changeType = $changeType;
        return $this;
    }

    /**
     * @param bool $reusable
     */
    public function reusable(bool $reusable)
    {
        $this->reusable = $reusable;
        return $this;
    }

    /**
     * @param float $principalValue
     */
    public function principalValue(float $principalValue)
    {
        $this->principalValue = $principalValue;
        return $this;
    }

    /**
     * @param float $interestValue
     */
    public function interestValue(float $interestValue)
    {
        $this->interestValue = $interestValue;
        return $this;
    }

    /**
     * @param int $interest
     */
    public function interest(int $interest)
    {
        $this->interest = $interest;
        return $this;
    }

    /**
     * @param float $fineValue
     */
    public function fineValue(float $fineValue)
    {
        $this->fineValue = $fineValue;
        return $this;
    }

    /**
     * @param float $rebateValue
     */
    public function rebateValue(float $rebateValue)
    {
        $this->rebateValue = $rebateValue;
        return $this;
    }

    /**
     * @param array $additionalData
     */
    public function additionalData(array $additionalData)
    {
        $this->additionalData = $additionalData;
        return $this;
    }

    /**
     * @param string $payerRequest
     */
    public function payerRequest(string $payerRequest)
    {
        $this->payerRequest = $payerRequest;
        return $this;
    }

    /**
     * @param string $expirationDate
     */
    public function expirationDate(string $expirationDate)
    {
        $this->expirationDate = $expirationDate;
        return $this;
    }

    /**
     * @param int $transactionPurpose
     */
    public function transactionPurpose(int $transactionPurpose)
    {
        $this->transactionPurpose = $transactionPurpose;
        return $this;
    }

    /**
     * @param float $transactionValue
     */
    public function transactionValue(float $transactionValue)
    {
        $this->transactionValue = $transactionValue;
        return $this;
    }

    /**
     * @param int $transactionChangeType
     */
    public function transactionChangeType(int $transactionChangeType)
    {
        $this->transactionChangeType = $transactionChangeType;
        return $this;
    }

    /**
     * @param int $agentModality
     */
    public function agentModality(int $agentModality)
    {
        $this->agentModality = $agentModality;
        return $this;
    }

    /**
     * @param Address $address
     */
    public function address(Address $address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @param string $revision
     */
    public function revision(string $revision)
    {
        $this->revision = $revision;
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
            //Requester
            'PixKey'                => $this->pixKey,
            'TaxNumber'             => $this->taxNumber,
            'Bank'                  => $this->bank,
            'BankBranch'            => $this->bankBranch,
            'BankAccount'           => $this->bankAccount,
            'BankAccountDigit'      => $this->bankAccountDigit,

            //Payer
            'PayerName'             => $this->payerName,
            'PayerTaxNumber'        => $this->payerTaxNumber,
            
            //Params
            'ChangeType'            => $this->changeType,
            'Reusable'              => $this->reusable,
            'PrincipalValue'        => $this->principalValue,
            'InterestValue'         => $this->interestValue,
            'FineValue'             => $this->fineValue,
            'RebateValue'           => $this->rebateValue,
            'Interest'              => $this->interest,
            'AdditionalData'        => $this->additionalData,
            'PayerRequest'          => $this->payerRequest,
            'ExpirationDate'        => $this->expirationDate,
            'TransactionPurpose'    => $this->transactionPurpose,
            'TransactionValue'      => $this->transactionValue,
            'TransactionChangeType' => $this->transactionChangeType,
            'AgentModality'         => $this->agentModality,
            'Address'               => !empty($this->address) ? $this->address->toArray() : null,

            //Condition
            'Status'                => $this->status,
            'Revision'              => $this->revision,
        ], function($value) {
            return !is_null($value);
        });
    }

}