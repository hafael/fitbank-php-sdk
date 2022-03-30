<?php

namespace Hafael\Fitbank\Models;

class Account
{

    const PROFILE_TYPE_PERSON  = 0;
    const PROFILE_TYPE_COMPANY = 1;

    const STATUS_DISABLED      = 0;
    const STATUS_ENABLED       = 1;

    const CONDITION_CREATED    = 0;
    const CONDITION_LIMITED    = 1;
    const CONDITION_VERIFIED   = 2;
    const CONDITION_BLOCKED    = 3;
    const CONDITION_TERMINATED = 4;

    /**
     * @var int
     */
    public $profileType = self::PROFILE_TYPE_PERSON;

    /**
     * @var int
     */
    public $status = 0;

    /**
     * @var int
     */
    public $condition = 0;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountKey;

    /**
     * @var string
     */
    public $spbAccount;

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
     * @var array
     */
    public $addresses = [];

    /**
     * @var array
     */
    public $documents = [];

    /**
     * @var array
     */
    public $persons = [];

    /**
     * @var mixed
     */
    public $holder;
    
    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['profileType'])) {
            $this->profileType($data['profileType']);
        }
        if(isset($data['status'])) {
            $this->status($data['status']);
        }
        if(isset($data['condition'])) {
            $this->condition($data['condition']);
        }
        if(isset($data['accountId'])) {
            $this->accountId($data['accountId']);
        }
        if(isset($data['accountKey'])) {
            $this->accountKey($data['accountKey']);
        }
        if(isset($data['spbAccount'])) {
            $this->spbAccount($data['spbAccount']);
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
        if(isset($data['holder'])) {
            $this->holder($data['holder']);
        }
        if(isset($data['addresses'])) {
            $this->addresses($data['addresses']);
        }
        if(isset($data['documents'])) {
            $this->documents($data['documents']);
        }
        if(isset($data['persons'])) {
            $this->persons($data['persons']);
        }
    }

    /**
     * @param int $profileType
     */
    public function profileType(int $profileType)
    {
        $this->profileType = $profileType;
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
     * @param int $condition
     */
    public function condition(int $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * @param string $accountId
     */
    public function accountId(string $accountId)
    {
        $this->accountId = $accountId;
        return $this;
    }

    /**
     * @param string $accountKey
     */
    public function accountKey(string $accountKey)
    {
        $this->accountKey = $accountKey;
        return $this;
    }

    /**
     * @param string $spbAccount
     */
    public function spbAccount(string $spbAccount)
    {
        $this->spbAccount = $spbAccount;
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
     * @param int $bankBranch
     */
    public function bankBranch(int $bankBranch)
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @param int $bankAccount
     */
    public function bankAccount(int $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @param int $bankAccountDigit
     */
    public function bankAccountDigit(int $bankAccountDigit)
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @param array|Company|Person $holder
     */
    public function holder($holder)
    {
        if($this->profileType === self::PROFILE_TYPE_COMPANY) {
            $this->holder = $holder instanceof Company ? $holder : new Company($holder);
        } else {
            $this->holder = $holder instanceof Person ? $holder : new Person($holder);
        }
        return $this;
    }

    /**
     * @param array $addresses
     */
    public function addresses(array $addresses)
    {
        foreach($addresses as $address)
        {
            if($address instanceof Address) {
                $this->addresses[] = $address;
            }else if (is_array($address)) {
                $this->addresses[] = new Address($address);
            }
        }
        return $this;
    }

    /**
     * @param array $documents
     */
    public function documents(array $documents)
    {
        foreach($documents as $document)
        {
            if($document instanceof Document) {
                $this->documents[] = $document;
            }else if (is_array($document)) {
                $this->documents[] = new Document($document);
            }
        }
        return $this;
    }

    /**
     * @param array $persons
     */
    public function persons(array $persons)
    {
        foreach($persons as $document)
        {
            if($document instanceof Person) {
                $this->persons[] = $document;
            }else if (is_array($document)) {
                $this->persons[] = new Person($document);
            }
        }
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        $addresses = array_map(function($address){return $address->toArray();}, $this->addresses);
        $persons = array_map(function($person){return $person->toArray();}, $this->persons);
        $documents = array_map(function($document){return $document->toArray();}, $this->documents);

        return array_filter(
            array_merge(
                [
                    'IsCompany'        => $this->profileType,
                    'Bank'             => $this->bank,
                    'BankBranch'       => $this->bankBranch,
                    'BankAccount'      => $this->bankAccount,
                    'BankAccountDigit' => $this->bankAccountDigit,
                    'Addresses'        => $addresses,
                    'Documents'        => $documents,
                    'Persons'          => $persons,
                ],
                $this->holder->toArray()
            )
        );
    }
}