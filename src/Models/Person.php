<?php

namespace Hafael\Fitbank\Models;

class Person
{
    const ROLE_TYPE_HOLDER     = 0;
    const ROLE_TYPE_PROCURATOR = 1;
    const ROLE_TYPE_BEARER     = 2;
    const ROLE_TYPE_ASSOCIATE  = 3;
    const ROLE_TYPE_USER       = 4;
    const ROLE_TYPE_LEGAL_REPRESENTATIVE = 5;

    const GENDER_OTHER  = 2;
    const GENDER_MALE   = 0;
    const GENDER_FEMALE = 1;

    const MARITAL_NOT_MARRIED = 0;
    const MARITAL_MARRIED     = 1;
    const MARITAL_DIVORCED    = 2;
    const MARITAL_SEPARATE    = 3;
    const MARITAL_WIDOWER     = 4;
    const MARITAL_SINGLE      = 5;
    const MARITAL_OTHER       = 6;
    
    /**
     * @var string
     */
    public $personRoleType = self::ROLE_TYPE_HOLDER;
    
    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $mail;

    /**
     * @var string
     */
    public $name;

    /**
     * Deprecated?
     * @var string
     */
    public $personName;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * Deprecated?
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $nickname;

    /**
     * @var boolean
     */
    public $checkPendingTransfers = false;

    /**
     * @var boolean
     */
    public $publicExposedPerson = false;

    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var string
     */
    public $motherFullName;

    /**
     * @var string
     */
    public $fatherFullName;

    /**
     * @var string
     */
    public $nationality;

    /**
     * @var string
     */
    public $birthCity;

    /**
     * @var string
     */
    public $birthState;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $maritalStatus;

    /**
     * @var string
     */
    public $spouseName;

    /**
     * @var string
     */
    public $occupation;

    /**
     * @var string
     */
    public $literacy;

    /**
     * @var string
     */
    public $identityDocument;

     /**
     * @var integer
     */
    public $monthlyIncome;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['personRoleType'])) {
            $this->personRoleType($data['personRoleType']);
        }
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
        if(isset($data['identifier'])) {
            $this->identifier($data['identifier']);
        }
        if(isset($data['mail'])) {
            $this->mail($data['mail']);
        }
        if(isset($data['name'])) {
            $this->name($data['name']);
            $this->personName($data['name']);
        }
        if(isset($data['personName'])) {
            $this->personName($data['personName']);
            $this->name($data['personName']);
        }
        if(isset($data['phoneNumber'])) {
            $this->phoneNumber($data['phoneNumber']);
            $this->phone($data['phoneNumber']);
        }
        if(isset($data['phone'])) {
            $this->phone($data['phone']);
            $this->phoneNumber($data['phone']);
        }
        if(isset($data['nickname'])) {
            $this->nickname($data['nickname']);
        }
        if(isset($data['checkPendingTransfers'])) {
            $this->checkPendingTransfers($data['checkPendingTransfers']);
        }
        if(isset($data['birthDate'])) {
            $this->birthDate($data['birthDate']);
        }
        if(isset($data['motherFullName'])) {
            $this->motherFullName($data['motherFullName']);
        }
        if(isset($data['fatherFullName'])) {
            $this->fatherFullName($data['fatherFullName']);
        }
        if(isset($data['nationality'])) {
            $this->nationality($data['nationality']);
        }
        if(isset($data['birthCity'])) {
            $this->birthCity($data['birthCity']);
        }
        if(isset($data['birthState'])) {
            $this->birthState($data['birthState']);
        }
        if(isset($data['gender'])) {
            $this->gender($data['gender']);
        }
        if(isset($data['maritalStatus'])) {
            $this->maritalStatus($data['maritalStatus']);
        }
        if(isset($data['spouseName'])) {
            $this->spouseName($data['spouseName']);
        }
        if(isset($data['occupation'])) {
            $this->occupation($data['occupation']);
        }
        if(isset($data['literacy'])) {
            $this->literacy($data['literacy']);
        }
        if(isset($data['identityDocument'])) {
            $this->identityDocument($data['identityDocument']);
        }
        if(isset($data['monthlyIncome'])) {
            $this->monthlyIncome($data['monthlyIncome']);
        }
    }

    /**
     * @param int $personRoleType
     */
    public function personRoleType(int $personRoleType)
    {
        $this->personRoleType = $personRoleType;
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
     * @param string $identifier
     */
    public function identifier(string $identifier)
    {
        $this->identifier = $identifier;
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
     * @param string $personName
     */
    public function personName(string $personName)
    {
        $this->personName = $personName;
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
     * @param string $phone
     */
    public function phone(string $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @param boolean $checkPendingTransfers
     */
    public function checkPendingTransfers(bool $checkPendingTransfers)
    {
        $this->checkPendingTransfers = $checkPendingTransfers;
        return $this;
    }

    /**
     * @param boolean $publicExposedPerson
     */
    public function publicExposedPerson(bool $publicExposedPerson)
    {
        $this->publicExposedPerson = $publicExposedPerson;
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
     * @param string $birthDate
     */
    public function birthDate(string $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @param string $motherFullName
     */
    public function motherFullName(string $motherFullName)
    {
        $this->motherFullName = $motherFullName;
        return $this;
    }

    /**
     * @param string $fatherFullName
     */
    public function fatherFullName(string $fatherFullName)
    {
        $this->fatherFullName = $fatherFullName;
        return $this;
    }

    /**
     * @param string $nationality
     */
    public function nationality(string $nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }

    /**
     * @param string $birthCity
     */
    public function birthCity(string $birthCity)
    {
        $this->birthCity = $birthCity;
        return $this;
    }

    /**
     * @param string $birthState
     */
    public function birthState(string $birthState)
    {
        $this->birthState = $birthState;
        return $this;
    }

    /**
     * @param int $gender
     */
    public function gender(int $gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @param int $maritalStatus
     */
    public function maritalStatus(int $maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }

    /**
     * @param string $spouseName
     */
    public function spouseName(string $spouseName)
    {
        $this->spouseName = $spouseName;
        return $this;
    }

    /**
     * @param string $occupation
     */
    public function occupation(string $occupation)
    {
        $this->occupation = $occupation;
        return $this;
    }

    /**
     * @param string $literacy
     */
    public function literacy(string $literacy)
    {
        $this->literacy = $literacy;
        return $this;
    }

    /**
     * @param string $identityDocument
     */
    public function identityDocument(string $identityDocument)
    {
        $this->identityDocument = $identityDocument;
        return $this;
    }

    /**
     * @param int $monthlyIncome
     */
    public function monthlyIncome(int $monthlyIncome)
    {
        $this->monthlyIncome = $monthlyIncome;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'PersonRoleType'        => $this->personRoleType,
            'TaxNumber'             => $this->taxNumber,
            'Identifier'            => $this->identifier,
            'Mail'                  => $this->mail,
            'Name'                  => $this->name,
            'PersonName'            => $this->personName,
            'PhoneNumber'           => $this->phoneNumber,
            'Phone'                 => $this->phone,
            'Nickname'              => $this->nickname,
            'PubliclyExposedPerson' => $this->publicExposedPerson,
            'CheckPendingTransfers' => $this->checkPendingTransfers,
            'BirthDate'             => $this->birthDate,
            'MotherFullName'        => $this->motherFullName,
            'FatherFullName'        => $this->fatherFullName,
            'Nationality'           => $this->nationality,
            'BirthCity'             => $this->birthCity,
            'BirthState'            => $this->birthState,
            'Gender'                => $this->gender,
            'MaritalStatus'         => $this->maritalStatus,
            'SpouseName'            => $this->spouseName,
            'Occupation'            => $this->occupation,
            'IdentityDocument'      => $this->identityDocument,
            'MonthlyIncome'         => $this->monthlyIncome,
        ]);
    }
}