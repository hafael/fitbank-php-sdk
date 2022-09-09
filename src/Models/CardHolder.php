<?php

namespace Hafael\Fitbank\Models;

class CardHolder
{

    /**
     * @var string
     */
    public $holderTaxNumber;

    /**
     * @var string
     */
    public $fullName;
    
    /**
     * @var string
     */
    public $motherName;

    /**
     * @var string
     */
    public $birthDate;

    /**
     * @var int
     */
    public $gender = 2;

    /**
     * @var string
     */
    public $nationality = 'Brasileira';

    /**
     * @var int
     */
    public $maritalStatus = 5;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['holderTaxNumber'])) {
            $this->holderTaxNumber($data['holderTaxNumber']);
        }
        if(isset($data['fullName'])) {
            $this->fullName($data['fullName']);
        }
        if(isset($data['motherName'])) {
            $this->motherName($data['motherName']);
        }
        if(isset($data['birthDate'])) {
            $this->birthDate($data['birthDate']);
        }
        if(isset($data['gender'])) {
            $this->gender($data['gender']);
        }
        if(isset($data['nationality'])) {
            $this->nationality($data['nationality']);
        }
        if(isset($data['maritalStatus'])) {
            $this->maritalStatus($data['maritalStatus']);
        }
    }

    /**
     * @param string $holderTaxNumber
     */
    public function holderTaxNumber(string $holderTaxNumber)
    {
        $this->holderTaxNumber = $holderTaxNumber;
        return $this;
    }

    /**
     * @param string $fullName
     */
    public function fullName(string $fullName)
    {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * @param string $motherName
     */
    public function motherName(string $motherName)
    {
        $this->motherName = $motherName;
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
     * @param int $gender
     */
    public function gender(int $gender)
    {
        $this->gender = $gender;
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
     * @param int $maritalStatus
     */
    public function maritalStatus(int $maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
        return $this;
    }


    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'HolderTaxNumber' => $this->holderTaxNumber,
            'FullName'        => $this->fullName,
            'MotherName'      => $this->motherName,
            'BirthDate'       => $this->birthDate,
            'Gender'          => $this->gender,
            'Nationality'     => $this->nationality,
            'MaritalStatus'   => $this->maritalStatus,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}