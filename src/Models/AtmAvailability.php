<?php

namespace Hafael\Fitbank\Models;

class AtmAvailability
{

    /**
     * @var string
     */
    public $taxNumber;
    
    /**
     * @var string
     */
    public $latitude;

    /**
     * @var string
     */
    public $longitude;

    /**
     * @var string
     */
    public $terminal;

    /**
     * @var int
     */
    public $acess;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $originNsu;

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
        if(isset($data['latitude'])) {
            $this->latitude($data['latitude']);
        }
        if(isset($data['longitude'])) {
            $this->longitude($data['longitude']);
        }
        if(isset($data['terminal'])) {
            $this->terminal($data['terminal']);
        }
        if(isset($data['acess'])) {
            $this->acess($data['acess']);
        }
        if(isset($data['limit'])) {
            $this->limit($data['limit']);
        }
        if(isset($data['originNsu'])) {
            $this->originNsu($data['originNsu']);
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
     * @param string $latitude
     */
    public function latitude(string $latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @param string $longitude
     */
    public function longitude(string $longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @param int $terminal
     */
    public function terminal(int $terminal)
    {
        $this->terminal = $terminal;
        return $this;
    }

    /**
     * @param int $acess
     */
    public function acess(int $acess)
    {
        $this->acess = $acess;
        return $this;
    }

    /**
     * @param int $limit
     */
    public function limit(int $limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @param string $originNsu
     */
    public function originNsu(string $originNsu)
    {
        $this->originNsu = $originNsu;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'TaxNumber' => $this->taxNumber,
            'Latitude'  => $this->latitude,
            'Longitude' => $this->longitude,
            'Terminal'  => $this->terminal,
            'Acess'     => $this->acess,
            'Limit'     => $this->limit,
            'OriginNSU' => $this->originNsu,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}