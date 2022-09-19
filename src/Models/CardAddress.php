<?php

namespace Hafael\Fitbank\Models;

class CardAddress
{
    const COMMERCIAL  = 0;
    const RESIDENTIAL = 1;

    /**
     * @var int
     */
    public $type = self::RESIDENTIAL;

    /**
     * @var string
     */
    public $line;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $zipCode;

    /**
     * @var string
     */
    public $neighborhood;

    /**
     * @var string
     */
    public $city;

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
     * @var string
     */
    public $reference;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['type'])) {
            $this->type($data['type']);
        }
        if(isset($data['line'])) {
            $this->line($data['line']);
        }
        if(isset($data['number'])) {
            $this->number($data['number']);
        }
        if(isset($data['zipCode'])) {
            $this->zipCode($data['zipCode']);
        }
        if(isset($data['neighborhood'])) {
            $this->neighborhood($data['neighborhood']);
        }
        if(isset($data['city'])) {
            $this->city($data['city']);
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
        if(isset($data['reference'])) {
            $this->reference($data['reference']);
        }
    }


    /**
     * @param int $type
     */
    public function type(int $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $line
     */
    public function line(string $line)
    {
        $this->line = $line;
        return $this;
    }

    /**
     * @param string $number
     */
    public function number(string $number)
    {
        $this->number = $number;
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
     * @param string $city
     */
    public function city(string $city)
    {
        $this->city = $city;
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
     * @param string $country
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
     * @param string $reference
     */
    public function reference(string $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'Type'         => $this->type,
            'Line'         => $this->line,
            'Number'       => $this->number,
            'ZipCode'      => $this->zipCode,
            'Neighborhood' => $this->neighborhood,
            'City'         => $this->city,
            'State'        => $this->state,
            'Country'      => $this->country,
            'Complement'   => $this->complement,
            'Reference'    => $this->reference,
        ], fn ($v) => !is_null($v));
    }
}