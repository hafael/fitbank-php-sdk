<?php

namespace Hafael\Fitbank\Models;

class UnnamedPrepaidCardRequest
{

    /**
     * @var int
     */
    public $usageType;
    
    /**
     * @var int
     */
    public $consumeType;

    /**
     * @var string
     */
    public $identifierProduct;

    /**
     * @var CardOwner
     */
    public $cardOwner;

    /**
     * @var Address
     */
    public $cardDeliveryAddress;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['usageType'])) {
            $this->usageType($data['usageType']);
        }
        if(isset($data['consumeType'])) {
            $this->consumeType($data['consumeType']);
        }
        if(isset($data['identifierProduct'])) {
            $this->identifierProduct($data['identifierProduct']);
        }
        if(isset($data['cardOwner'])) {
            $this->cardOwner($data['cardOwner']);
        }
        if(isset($data['cardDeliveryAddress'])) {
            $this->cardDeliveryAddress($data['cardDeliveryAddress']);
        }
    }

    /**
     * @param int $usageType
     */
    public function usageType(int $usageType)
    {
        $this->usageType = $usageType;
        return $this;
    }

    /**
     * @param int $consumeType
     */
    public function consumeType(int $consumeType)
    {
        $this->consumeType = $consumeType;
        return $this;
    }

    /**
     * @param string $identifierProduct
     */
    public function identifierProduct(string $identifierProduct)
    {
        $this->identifierProduct = $identifierProduct;
        return $this;
    }


    /**
     * @param array|CardOwner $cardOwner
     */
    public function cardOwner($cardOwner)
    {
        if($cardOwner instanceof CardOwner) {
            $this->cardOwner = $cardOwner;
        }else if (is_array($cardOwner)) {
            $this->cardOwner = new CardOwner($cardOwner);
        }
        return $this;
    }

    /**
     * @param array|Address $cardDeliveryAddress
     */
    public function cardDeliveryAddress($cardDeliveryAddress)
    {
        if($cardDeliveryAddress instanceof Address) {
            $this->cardDeliveryAddress = $cardDeliveryAddress;
        }else if (is_array($cardDeliveryAddress)) {
            $this->cardDeliveryAddress = new Address($cardDeliveryAddress);
        }
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'UsageType'           => $this->usageType,
            'ConsumeType'         => $this->consumeType,
            'IdentifierProduct'   => $this->identifierProduct,
            'CardOwner'           => $this->cardOwner->toArray(),
            'CardDeliveryAddress' => $this->cardDeliveryAddress->toArray(),
        ], function($value) {
            return !is_null($value);
        });
    }

    


}