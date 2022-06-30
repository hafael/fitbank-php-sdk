<?php

namespace Hafael\Fitbank\Models;

class RefundPixOut
{

    const STATUS_ACCEPTED = 0;
    const STATUS_DENIED = 1;
    const STATUS_CANCELED = 2;
    const STATUS_PRE_SETTLED = 4;
    const STATUS_SETTLED = 5;
    const STATUS_PRE_CANCELED = 6;
    const STATUS_REGISTERED = 7;
    const STATUS_CREATED = 8;

    const CODE_PSP_ERROR = 'BE08';
    const CODE_FRAUD_DETECTED = 'FR01';
    const CODE_CUSTOMER_REQUEST = 'MD06';
    const CODE_CUSTOMER_REQUEST_WITHDRAWAL = 'SL02';

    const STATUS_LABEL = [
        self::STATUS_ACCEPTED     => 'Accepted',
        self::STATUS_DENIED       => 'Denied',
        self::STATUS_CANCELED     => 'Canceled',
        self::STATUS_PRE_SETTLED  => 'PreSettled',
        self::STATUS_SETTLED      => 'Settled',
        self::STATUS_PRE_CANCELED => 'PreCanceled',
        self::STATUS_REGISTERED   => 'Registered',
        self::STATUS_CREATED      => 'Created',
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
     * @var string
     */
    public $toBank;

    /**
     * @var string
     */
    public $toBankBranch;

    /**
     * @var string
     */
    public $toBbankAccount;
    
    /**
     * @var string
     */
    public $toBbankAccountDigit;

    /**
     * @var int
     */
    public $refundValue;

    /**
     * @var string
     */
    public $returnCode;

    /**
     * @var string
     */
    public $customerMessage;

    /**
     * @var string
     */
    public $transferDate;

    /**
     * @var string
     */
    public $pixInDocumentNumber;

    /**
     * @var string
     */
    public $description;

    /**
     * @var array
     */
    public $tags;

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
        if(isset($data['documentNumber'])) {
            $this->documentNumber($data['documentNumber']);
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
        
        if(isset($data['toTaxNumber'])) {
            $this->toTaxNumber($data['toTaxNumber']);
        }
        if(isset($data['toBank'])) {
            $this->toBank($data['toBank']);
        }
        if(isset($data['toBankBranch'])) {
            $this->toBankBranch($data['toBankBranch']);
        }
        if(isset($data['toBankAccount'])) {
            $this->toBankAccount($data['toBankAccount']);
        }
        if(isset($data['toBankAccountDigit'])) {
            $this->toBankAccountDigit($data['toBankAccountDigit']);
        }

        if(isset($data['status'])) {
            $this->status($data['status']);
        }
        
        if(isset($data['refundValue'])) {
            $this->refundValue($data['refundValue']);
        }
        if(isset($data['returnCode'])) {
            $this->returnCode($data['returnCode']);
        }
        if(isset($data['customerMessage'])) {
            $this->customerMessage($data['customerMessage']);
        }
        
        if(isset($data['description'])) {
            $this->description($data['description']);
        }
        if(isset($data['tags'])) {
            $this->tags($data['tags']);
        }
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
     * @param string $taxNumber
     */
    public function toTaxNumber(string $taxNumber)
    {
        $this->toTaxNumber = $taxNumber;
        return $this;
    }

    /**
     * @param string $bank
     */
    public function toBank(string $bank)
    {
        $this->toBank = $bank;
        return $this;
    }

    /**
     * @param string $bankBranch
     */
    public function toBankBranch(string $bankBranch)
    {
        $this->toBankBranch = $bankBranch;
        return $this;
    }

    /**
     * @param string $bankAccount
     */
    public function toBankAccount(string $bankAccount)
    {
        $this->toBankAccount = $bankAccount;
        return $this;
    }

    /**
     * @param string $bankAccountDigit
     */
    public function toBankAccountDigit(string $bankAccountDigit)
    {
        $this->toBankAccountDigit = $bankAccountDigit;
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
     * @param float $refundValue
     */
    public function refundValue(float $refundValue)
    {
        $this->refundValue = $refundValue;
        return $this;
    }

    /**
     * @param string $returnCode
     */
    public function returnCode(string $returnCode)
    {
        $this->returnCode = $returnCode;
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
     * @param string $description
     */
    public function description(string $description)
    {
        $this->description = $description;
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
     * All payment read attributes
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            //Requester
            'DocumentNumber'     => $this->documentNumber,
            'TaxNumber'          => $this->taxNumber,
            'Bank'               => $this->bank,
            'BankBranch'         => $this->bankBranch,
            'BankAccount'        => $this->bankAccount,
            'BankAccountDigit'   => $this->bankAccountDigit,
            'ToTaxNumber'        => $this->toTaxNumber,
            'ToBank'             => $this->toBank,
            'ToBankBranch'       => $this->toBankBranch,
            'ToBankAccount'      => $this->toBankAccount,
            'ToBankAccountDigit' => $this->toBankAccountDigit,
            //Payer
            'RefundValue'        => $this->refundValue,
            'CustomerMessage'    => $this->customerMessage,
            //Params
            'Description'        => $this->description,
            'Tags'               => $this->tags,
            //Condition
            'Status'             => $this->status,
        ], function($value) {
            return !is_null($value);
        });
    }

}