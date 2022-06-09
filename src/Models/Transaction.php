<?php

namespace Hafael\Fitbank\Models;

class Transaction
{ 

    /**
     * @var string
     */
    public $transactionId;

    /**
     * @var string
     */
    public $internalIdentifier;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $subType;

    /**
     * @var string
     */
    public $entryDate;

    /**
     * @var float
     */
    public $entryValue;

    /**
     * @var string
     */
    public $usedGuaranteed;

    /**
     * @var string
     */
    public $guaranteedValue;

    /**
     * @var string
     */
    public $receiptUrl;


    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['transactionId'])) {
            $this->transactionId($data['transactionId']);
        }
        if(isset($data['internalIdentifier'])) {
            $this->internalIdentifier($data['internalIdentifier']);
        }
        if(isset($data['description'])) {
            $this->description($data['description']);
        }
        if(isset($data['subType'])) {
            $this->subType($data['subType']);
        }
        if(isset($data['entryDate'])) {
            $this->entryDate($data['entryDate']);
        }
        if(isset($data['entryValue'])) {
            $this->entryValue($data['entryValue']);
        }
        if(isset($data['usedGuaranteed'])) {
            $this->usedGuaranteed($data['usedGuaranteed']);
        }
        if(isset($data['guaranteedValue'])) {
            $this->guaranteedValue($data['guaranteedValue']);
        }
        if(isset($data['receiptUrl'])) {
            $this->receiptUrl($data['receiptUrl']);
        }
    }

    /**
     * @param string $transactionId
     */
    public function transactionId(string $transactionId = null)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @param string $internalIdentifier
     */
    public function internalIdentifier(string $internalIdentifier = null)
    {
        $this->internalIdentifier = $internalIdentifier;
        return $this;
    }

    /**
     * @param string $description
     */
    public function description(string $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $subType
     */
    public function subType(string $subType = null)
    {
        $this->subType = $subType;
        return $this;
    }

    /**
     * @param string $entryDate
     */
    public function entryDate(string $entryDate = null)
    {
        $this->entryDate = $entryDate;
        return $this;
    }

    /**
     * @param string $entryValue
     */
    public function entryValue(string $entryValue = null)
    {
        $this->entryValue = $entryValue;
        return $this;
    }

    /**
     * @param string $usedGuaranteed
     */
    public function usedGuaranteed(string $usedGuaranteed = null)
    {
        $this->usedGuaranteed = $usedGuaranteed;
        return $this;
    }

    /**
     * @param string $guaranteedValue
     */
    public function guaranteedValue(string $guaranteedValue = null)
    {
        $this->guaranteedValue = $guaranteedValue;
        return $this;
    }

    /**
     * @param string $receiptUrl
     */
    public function receiptUrl(string $receiptUrl = null)
    {
        $this->receiptUrl = $receiptUrl;
        return $this;
    }

    /**
     * 
     * @return BankAccount
     */
    public static function fromArray(array $data)
    {
        $model = new self();
        foreach($data as $key => $value) {
            $model->{lcfirst($key)}($value);
        }
        return $model;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'InternalIdentifier' => $this->bank,
            'Description'        => $this->bankBranch,
            'Subtype'            => $this->bankAccount,
            'EntryDate'          => $this->bankAccountDigit,
            'EntryValue'         => $this->accountKey,
            'UsedGuaranteed'     => $this->entryValue,
            'GuaranteedValue'    => $this->entryValue,
            'ReceiptUrl'         => $this->entryValue,
        ]);
    }
}