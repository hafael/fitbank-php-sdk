<?php

namespace Hafael\Fitbank\Models;

class ChangePinCardRequest
{

    /**
     * @var string
     */
    public $identifierCard;

    /**
     * @var int
     */
    public $currentPin;

    /**
     * @var int
     */
    public $pin;

    /**
     * @var int
     */
    public $pinCheck;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['identifierCard'])) {
            $this->identifierCard($data['identifierCard']);
        }
        if(isset($data['currentPin'])) {
            $this->currentPin($data['currentPin']);
        }
        if(isset($data['pin'])) {
            $this->pin($data['pin']);
        }
        if(isset($data['pinCheck'])) {
            $this->pinCheck($data['pinCheck']);
        }
    }

    /**
     * @param string $identifierCard
     */
    public function identifierCard(string $identifierCard)
    {
        $this->identifierCard = $identifierCard;
        return $this;
    }

    /**
     * @param int $currentPin
     */
    public function currentPin(int $currentPin)
    {
        $this->currentPin = $currentPin;
        return $this;
    }

    /**
     * @param int $pin
     */
    public function pin(int $pin)
    {
        $this->pin = $pin;
        return $this;
    }

    /**
     * @param int $pinCheck
     */
    public function pinCheck(string $pinCheck)
    {
        $this->pinCheck = $pinCheck;
        return $this;
    }

    /**
     * @return bool
     */
    public function isValid()
    {
        return $this->pinCheck === $this->pin;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'IdentifierCard' => $this->identifierCard,
            'CurrentPin'     => $this->currentPin,
            'Pin'            => $this->pin,
            'PinCheck'       => $this->pinCheck,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}