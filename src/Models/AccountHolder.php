<?php

namespace Hafael\Fitbank\Models;

class AccountHolder
{ 

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $tradingName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var array
     */
    public $accounts;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        if(isset($data['identifier'])) {
            $this->identifier($data['identifier']);
        }
        if(isset($data['name'])) {
            $this->name($data['name']);
        }
        if(isset($data['nickname'])) {
            $this->nickname($data['nickname']);
        }
        if(isset($data['tradingName'])) {
            $this->tradingName($data['tradingName']);
        }
        if(isset($data['phone'])) {
            $this->phone($data['phone']);
        }
        if(isset($data['mail'])) {
            $this->mail($data['mail']);
        }
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
        if(isset($data['accounts'])) {
            $this->accounts($data['accounts']);
        }
    }

    /**
     * @param string $identifier
     */
    public function identifier(string $identifier = null)
    {
        $this->identifier = $identifier;
        return $this;
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
     * @param string $nickname
     */
    public function nickname(string $nickname = null)
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * @param string $tradingName
     */
    public function tradingName(string $tradingName = null)
    {
        $this->tradingName = $tradingName;
        return $this;
    }

    /**
     * @param string $phone
     */
    public function phone(string $phone = null)
    {
        $this->phone = $phone;
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
     * @param string $mail
     */
    public function mail(string $mail = null)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPerson()
    {
        return empty($this->tradingName);
    }

    /**
     * @return bool
     */
    public function isCompany()
    {
        return !$this->isPerson();
    }

    /**
     * @param array $accounts
     */
    public function accounts(array $accounts = [])
    {
        foreach($accounts as $account)
        {
            if($account instanceof BankAccount) {
                $this->accounts[] = $account;
            }else if (is_array($account)) {
                $this->accounts[] = BankAccount::fromArray($account);
            }
        }
    }

    /**
     * 
     * @return AccountHolder
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
        $accounts = array_map(function($account){return $account->toArray();}, $this->accounts);

        return array_filter([
            'Identifier'  => $this->identifier,
            'TaxNumber'   => $this->taxNumber,
            'Name'        => $this->Name,
            'TradingName' => $this->tradingName,
            'Nickname'    => $this->nickname,
            'Mail'        => $this->mail,
            'Phone'       => $this->phone,
            'Accounts'    => $accounts,
        ]);
    }
}