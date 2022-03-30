<?php

namespace Hafael\Fitbank\Models;

class Address
{

    const COMMERCIAL  = 0;
    const RESIDENTIAL = 1;

    /**
     * @var int
     */
    public $addressType = self::RESIDENTIAL;

    /**
     * @var string
     */
    public $addressLine;

    /**
     * @var string
     */
    public $addressLine2;

    /**
     * @var string
     */
    public $zipCode;

    /**
     * @var string
     */
    public $neighborhood;

    /**
     * @var int
     */
    public $cityCode;

    /**
     * @var string
     */
    public $cityName;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $complement;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['addressType'])) {
            $this->addressType($data['addressType']);
        }
        if(isset($data['addressLine'])) {
            $this->addressLine($data['addressLine']);
        }
        if(isset($data['addressLine2'])) {
            $this->addressLine2($data['addressLine2']);
        }
        if(isset($data['zipCode'])) {
            $this->zipCode($data['zipCode']);
        }
        if(isset($data['neighborhood'])) {
            $this->neighborhood($data['neighborhood']);
        }
        if(isset($data['cityCode'])) {
            $this->cityCode($data['cityCode']);
        }
        if(isset($data['cityName'])) {
            $this->cityName($data['cityName']);
        }
        if(isset($data['state'])) {
            $this->state($data['state']);
        }
        if(isset($data['country'])) {
            $this->country($data['country']);
        }
        if(isset($data['complement'])) {
            $this->complement($data['complement']);
        }
    }

    /**
     * @param int $addressType
     */
    public function addressType(int $addressType)
    {
        $this->addressType = $addressType;
        return $this;
    }

    /**
     * @param string $addressType
     * @return int
     */
    public static function getAddressTypeId(string $addressType)
    {
        return [
            'BUSINESS'    => self::COMMERCIAL,
            'COMMERCIAL'  => self::COMMERCIAL,
            'RESIDENTIAL' => self::RESIDENTIAL,
        ][$addressType];
    }

    /**
     * @param string $addressLine
     */
    public function addressLine(string $addressLine)
    {
        $this->addressLine = $addressLine;
        return $this;
    }

    /**
     * @param string $addressLine2
     */
    public function addressLine2(string $addressLine2)
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * @param string $zipCode
     */
    public function zipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @param string $neighborhood
     */
    public function neighborhood(string $neighborhood)
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * @param int $cityCode
     */
    public function cityCode(int $cityCode)
    {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * @param string $cityName
     */
    public function cityName(string $cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }

    /**
     * @param string $state
     */
    public function state(string $state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @param string $cityName
     */
    public function country(string $country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @param string $complement
     */
    public function complement(string $complement)
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'AddressType'  => $this->addressType,
            'AddressLine'  => $this->addressLine,
            'AddressLine2' => $this->addressLine2,
            'ZipCode'      => $this->zipCode,
            'Neighborhood' => $this->neighborhood,
            'CityCode'     => $this->cityCode,
            'CityName'     => $this->cityName,
            'State'        => $this->state,
            'Country'      => $this->country,
            'Complement'   => $this->complement,
        ]);
    }
}