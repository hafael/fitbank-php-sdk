<?php

namespace Hafael\Fitbank\Models;

class User
{
    const PROFILE_TYPE_LIMITED = 0;
    const PROFILE_TYPE_MASTER  = 1;

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $cellPhone;

    /**
     * @var int
     */
    public $profileType = self::PROFILE_TYPE_LIMITED;

    /**
     * @var array
     */
    public $accountsTaxNumber = [];

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
        if(isset($data['mail'])) {
            $this->mail($data['mail']);
        }
        if(isset($data['name'])) {
            $this->name($data['name']);
        }
        if(isset($data['cellPhone'])) {
            $this->cellPhone($data['cellPhone']);
        }
        if(isset($data['profileType'])) {
            $this->profileType($data['profileType']);
        }
        if(isset($data['accountsTaxNumber'])) {
            $this->accountsTaxNumber($data['accountsTaxNumber']);
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
     * @param string $mail
     */
    public function mail(string $mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @param string $name
     */
    public function name(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $cellPhone
     */
    public function cellPhone(string $cellPhone)
    {
        $this->cellPhone = $cellPhone;
        return $this;
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
     * @param array $accountsTaxNumber
     */
    public function accountsTaxNumber(array $accountsTaxNumber)
    {
        $this->accountsTaxNumber = $accountsTaxNumber;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'TaxNumber'         => $this->taxNumber,
            'Mail'              => $this->mail,
            'Name'              => $this->name,
            'Cellphone'         => $this->cellPhone,
            'Profiletype'       => $this->profileType,
            'AccountsTaxNumber' => $this->accountsTaxNumber,
        ]);
    }
}