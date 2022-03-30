<?php

namespace Hafael\Fitbank\Models;

class Company
{
    const COMPANY_TYPE_SA   = 0;
    const COMPANY_TYPE_LTDA = 1;
    const COMPANY_TYPE_MEI  = 2;

    /**
     * @var int
     */
    public $companyType = self::COMPANY_TYPE_LTDA;

    /**
     * @var string
     */
    public $companyActivity;

    /**
     * @var string
     */
    public $constitutionDate;

    /**
     * @var string
     */
    public $personName;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['companyType'])) {
            $this->companyType($data['companyType']);
        }
        if(isset($data['companyActivity'])) {
            $this->companyActivity($data['companyActivity']);
        }
        if(isset($data['constitutionDate'])) {
            $this->constitutionDate($data['constitutionDate']);
        }
        if(isset($data['personName'])) {
            $this->personName($data['personName']);
        }
        if(isset($data['nickname'])) {
            $this->nickname($data['nickname']);
        }
        if(isset($data['phoneNumber'])) {
            $this->phoneNumber($data['phoneNumber']);
        }
        if(isset($data['mail'])) {
            $this->mail($data['mail']);
        }
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
    }

    /**
     * @param string $companyType
     */
    public static function getCompanyTypeId(string $companyType)
    {
        return [
            'LTDA'   => self::COMPANY_TYPE_LTDA,
            'SA'     => self::COMPANY_TYPE_SA,
            'MEI'    => self::COMPANY_TYPE_MEI,
            'EI'     => self::COMPANY_TYPE_LTDA,
            'EIRELI' => self::COMPANY_TYPE_LTDA,
        ][$companyType];
    }

    /**
     * @param int $companyType
     */
    public function companyType(int $companyType)
    {
        $this->companyType = $companyType;
        return $this;
    }

    /**
     * @param string $companyActivity
     */
    public function companyActivity(string $companyActivity)
    {
        $this->companyActivity = $companyActivity;
        return $this;
    }

    /**
     * @param string $constitutionDate
     */
    public function constitutionDate(string $constitutionDate)
    {
        $this->constitutionDate = $constitutionDate;
        return $this;
    }

    /**
     * @param string $personName
     */
    public function personName(string $personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * @param string $nickname
     */
    public function nickname(string $nickname)
    {
        $this->nickname = $nickname;
        return $this;
    }

    /**
     * @param string $phoneNumber
     */
    public function phoneNumber(string $phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
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
     * @param string $mail
     */
    public function mail(string $mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'CompanyType'      => $this->companyType,
            'CompanyActivity'  => $this->companyActivity,
            'ConstitutionDate' => $this->constitutionDate,
            'TaxNumber'        => $this->taxNumber,
            'Mail'             => $this->mail,
            'PersonName'       => $this->personName,
            'PhoneNumber'      => $this->phoneNumber,
            'NickName'         => $this->nickname,
        ]);
    }
}