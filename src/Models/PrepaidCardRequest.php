<?php

namespace Hafael\Fitbank\Models;

class PrepaidCardRequest
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
     * @var string
     */
    public $embossingName;

    /**
     * @var int
     */
    public $embossingNameType;

    /**
     * @var CardOwner
     */
    public $cardOwner;

    /**
     * @var CardHolder
     */
    public $cardHolder;

    /**
     * @var CardHolderContact
     */
    public $cardHolderContact;

    /**
     * @var Address
     */
    public $billingAddress;

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
        if(isset($data['embossingName'])) {
            $this->embossingName($data['embossingName']);
        }
        if(isset($data['embossingNameType'])) {
            $this->embossingNameType($data['embossingNameType']);
        }
        if(isset($data['cardOwner'])) {
            $this->cardOwner($data['cardOwner']);
        }
        if(isset($data['cardHolder'])) {
            $this->cardHolder($data['cardHolder']);
        }
        if(isset($data['cardHolderContact'])) {
            $this->cardHolderContact($data['cardHolderContact']);
        }
        if(isset($data['billingAddress'])) {
            $this->billingAddress($data['billingAddress']);
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
     * @param string $embossingName
     */
    public function embossingName(string $embossingName)
    {
        $this->embossingName = $embossingName;
        return $this;
    }

    /**
     * @param int $embossingNameType
     */
    public function embossingNameType(int $embossingNameType)
    {
        $this->embossingNameType = $embossingNameType;
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
     * @param array|CardHolder $cardHolder
     */
    public function cardHolder($cardHolder)
    {
        if($cardHolder instanceof CardHolder) {
            $this->cardHolder = $cardHolder;
        }else if (is_array($cardHolder)) {
            $this->cardHolder = new CardHolder($cardHolder);
        }
        return $this;
    }

    /**
     * @param array|CardHolderContact $cardHolderContact
     */
    public function cardHolderContact($cardHolderContact)
    {
        if($cardHolderContact instanceof CardHolderContact) {
            $this->cardHolderContact = $cardHolderContact;
        }else if (is_array($cardHolderContact)) {
            $this->cardHolderContact = new CardHolderContact($cardHolderContact);
        }
        return $this;
    }

    /**
     * @param array|Address $billingAddress
     */
    public function billingAddress($billingAddress)
    {
        if($billingAddress instanceof Address) {
            $this->billingAddress = $billingAddress;
        }else if (is_array($billingAddress)) {
            $this->billingAddress = new Address($billingAddress);
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
            'EmbossingName'       => $this->embossingName,
            'EmbossingNameType'   => $this->embossingNameType,
            'CardOwner'           => $this->cardOwner->toArray(),
            'CardHolder'          => $this->cardHolder->toArray(),
            'CardHolderContact'   => $this->cardHolderContact->toArray(),
            'BillingAddress'      => $this->billingAddress->toArray(),
            'CardDeliveryAddress' => $this->cardDeliveryAddress->toArray(),
        ], function($value) {
            return !is_null($value);
        });
    }

    


}