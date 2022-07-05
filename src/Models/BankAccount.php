<?php

namespace Hafael\Fitbank\Models;

class BankAccount
{ 

    /**
     * @var string
     */
    public $name;

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
    public $accountKey;

    /**
     * @var string
     */
    public $spbAccount;

    /**
     * @var int
     */
    public $accountType;


    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['name'])) {
            $this->name($data['name']);
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
        if(isset($data['accountKey'])) {
            $this->accountKey($data['accountKey']);
        }
        if(isset($data['spbAccount'])) {
            $this->spbAccount($data['spbAccount']);
        }
        if(isset($data['accountType'])) {
            $this->accountType($data['accountType']);
        }
    }

    /**
     * @param string $name
     */
    public function name(string $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $taxNumber
     */
    public function taxNumber(string $taxNumber = null)
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @param string $bank
     */
    public function bank(string $bank = null)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @param string $bankBranch
     */
    public function bankBranch(string $bankBranch = null)
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @param string $bankAccount
     */
    public function bankAccount(string $bankAccount = null)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @param string $bankAccountDigit
     */
    public function bankAccountDigit(string $bankAccountDigit = null)
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @param string $accountKey
     */
    public function accountKey(string $accountKey = null)
    {
        $this->accountKey = $accountKey;
        return $this;
    }

    /**
     * @param string $spbAccount
     */
    public function spbAccount(string $spbAccount = null)
    {
        $this->spbAccount = $spbAccount;
        return $this;
    }

    /**
     * @param int $accountType
     */
    public function accountType(int $accountType = 0)
    {
        $this->accountType = $accountType;
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
            'TaxNumber'        => $this->taxNumber,
            'Bank'             => $this->bank,
            'BankBranch'       => $this->bankBranch,
            'BankAccount'      => $this->bankAccount,
            'BankAccountDigit' => $this->bankAccountDigit,
            'AccountKey'       => $this->accountKey,
            'SpbAccount'       => $this->spbAccount,
        ]);
    }
}