<?php

namespace Hafael\Fitbank\Models;

class CardOwner
{

    /**
     * @var string
     */
    public $ownerTaxNumber;

    /**
     * @var string
     */
    public $fullName;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $mail;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['ownerTaxNumber'])) {
            $this->ownerTaxNumber($data['ownerTaxNumber']);
        }
        if(isset($data['fullName'])) {
            $this->fullName($data['fullName']);
        }
        if(isset($data['phone'])) {
            $this->phone($data['phone']);
        }
        if(isset($data['mail'])) {
            $this->mail($data['mail']);
        }
    }

    /**
     * @param string $ownerTaxNumber
     */
    public function ownerTaxNumber(string $ownerTaxNumber)
    {
        $this->ownerTaxNumber = $ownerTaxNumber;
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
     * @param string $phone
     */
    public function phone(string $phone)
    {
        $this->phone = $phone;
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
            'OwnerTaxNumber' => $this->ownerTaxNumber,
            'FullName'       => $this->fullName,
            'Phone'          => $this->phone,
            'Mail'           => $this->mail,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}