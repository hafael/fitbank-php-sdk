<?php

namespace Hafael\Fitbank\Models;

class NewAccount
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
     * @var bool
     */
    public $enableSpb;

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
    public $persons = [];

    /**
     * @var mixed
     */
    public $holder;

    /**
     * @var mixed
     */
    public $company;
    
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
        if(isset($data['enableSpb'])) {
            $this->enableSpb($data['enableSpb']);
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
        
        if(isset($data['persons'])) {
            $this->persons($data['persons']);
        }
        if(isset($data['company'])) {
            $this->company($data['company']);
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
     * @param bool $enableSpb
     */
    public function enableSpb(bool $enableSpb)
    {
        $this->enableSpb = $enableSpb;
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
     * @param array|Company $company
     */
    public function company($company)
    {
        if($company instanceof Company) {
            $this->company = $company;
        } else {
            $this->company = new Company($company);
        }
        return $this;
    }

    /**
     * @param array|Person $holder
     */
    public function holder($holder)
    {
        if($holder instanceof Person) {
            $this->holder = $holder;
        } else {
            $this->holder = new Person($holder);
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
        
        $baseFields = [
            'IsCompany'             => $this->profileType,
            'EnableSpb'             => $this->enableSpb,
            'Bank'                  => $this->bank,
            'BankBranch'            => $this->bankBranch,
            'BankAccount'           => $this->bankAccount,
            'BankAccountDigit'      => $this->bankAccountDigit,
        ];

        if($this->profileType === self::PROFILE_TYPE_PERSON) 
        {
            
            $documents = array_map(function($document){return $document->toArray();}, $this->holder->documents);
            $persons = array_map(function($person){return $person->toArray();}, $this->persons);
            
            $holderFields = array_merge($this->holder->toArray(), [
                'Addresses' => [$this->holder->address->toArray()],
                'Documents' => $documents,
                'Persons' => $persons,
            ]);

        }else 
        {
            $persons = [];
            $addresses = [$this->company->address->toArray()];
            $documents = array_map(function($document){return $document->toArray();}, $this->company->documents);
            
            foreach($this->persons as $person) {

                $persons[] = $person->toArray();
                if($person->personRoleType === Person::ROLE_TYPE_HOLDER) {
                    $addresses[] = $person->address->toArray();
                }
                
            }

            $holderFields = array_merge($this->company->toArray(), [
                'Addresses' => $addresses,
                'Documents' => $documents,
                'Persons' => $persons,
            ]);
        }
        
        return array_filter(
            array_merge(
                $baseFields,
                $holderFields
            )
        );
       
    }
}