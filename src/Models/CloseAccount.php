<?php

namespace Hafael\Fitbank\Models;

class CloseAccount
{

    /**
     * @var array
     */
    public $accountKeys = [];

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var array
     */
    public $accounts = [];

    /**
     * @var string
     */
    public $justification;

    
    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['accountKeys'])) {
            $this->accountKeys($data['accountKeys']);
        }
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
        if(isset($data['accounts'])) {
            $this->accounts($data['accounts']);
        }
        if(isset($data['justification'])) {
            $this->justification($data['justification']);
        }
    }

    /**
     * @param array $accountKeys
     */
    public function accountKeys(array $accountKeys)
    {
        $this->accountKeys = $accountKeys;
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
     * @param array $accounts
     */
    public function accounts(array $accounts)
    {
        $this->accounts = $accounts;
        return $this;
    }

    /**
     * @param string $justification
     */
    public function justification(string $justification)
    {
        $this->justification = $justification;
        return $this;
    }


    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'TaxNumber',
            'AccountKeys',
            'Accounts',
            'Justification',
        ], function($value) {
            return !is_null($value);
        });
    }


}