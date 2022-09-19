<?php

namespace Hafael\Fitbank\Models;

class PrepaidCardRequest
{

    const CONSUME_TYPE_LIMITED = 0;
    const CONSUME_TYPE_UNLIMITED = 1;

    const USAGE_TYPE_BALANCE = 0;
    const USAGE_TYPE_OVERBALANCE = 1;

    const EMBOSSING_TYPE_HOLDER = 0;
    const EMBOSSING_TYPE_OWNER = 1;

    const STATUS_CREATED = 0;
    const STATUS_REQUESTED = 1;
    const STATUS_GENERATED = 2;
    const STATUS_BOUND = 3;
    const STATUS_ACTIVE = 4;
    const STATUS_ERROR_BINDING = 5;
    const STATUS_ERROR_REQUESTED = 6;
    const STATUS_INACTIVE = 7;
    const STATUS_BINDING = 8;
    const STATUS_PRE_ERROR = 9;
    const STATUS_PRE_CREATED = 10;
    const STATUS_CANCELED = 11;
    const STATUS_CANCELATION_ERROR = 13;

    const REASON_CODE_CHANGE_PIN = 0;
    const REASON_CODE_LOST = 2;
    const REASON_CODE_STOLEN = 3;
    const REASON_CODE_FAILURE_LOSS_DELIVERY = 4;
    const REASON_CODE_FRAUD_DETECTED = 5;
    const REASON_CODE_CANCELLATION = 6;
    const REASON_CODE_TEMPORARY_PIN = 5;
    const REASON_CODE_TEMPORARY_BLOCK = 8;

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
     * @var CardAddress
     */
    public $billingAddress;

    /**
     * @var CardAddress
     */
    public $cardDeliveryAddress;

    /**
     * @var float
     */
    public $rateValue = 0;

    /**
     * @var int
     */
    public $rateValueType = 0;

    /**
     * @var int
     */
    public $deliveryValue = 0;

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
        if(isset($data['rateValue'])) {
            $this->rateValue($data['rateValue']);
        }
        if(isset($data['rateValueType'])) {
            $this->rateValueType($data['rateValueType']);
        }
        if(isset($data['deliveryValue'])) {
            $this->deliveryValue($data['deliveryValue']);
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
     * @param array|CardAddress $billingAddress
     */
    public function billingAddress($billingAddress)
    {
        if($billingAddress instanceof CardAddress) {
            $this->billingAddress = $billingAddress;
        }else if (is_array($billingAddress)) {
            $this->billingAddress = new CardAddress($billingAddress);
        }
        return $this;
    }

    /**
     * @param array|CardAddress $cardDeliveryAddress
     */
    public function cardDeliveryAddress($cardDeliveryAddress)
    {
        if($cardDeliveryAddress instanceof CardAddress) {
            $this->cardDeliveryAddress = $cardDeliveryAddress;
        }else if (is_array($cardDeliveryAddress)) {
            $this->cardDeliveryAddress = new CardAddress($cardDeliveryAddress);
        }
        return $this;
    }

    /**
     * @param float $rateValue
     */
    public function rateValue(float $rateValue)
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @param int $rateValueType
     */
    public function rateValueType(int $rateValueType)
    {
        $this->rateValueType = $rateValueType;
        return $this;
    }

    /**
     * @param int $deliveryValue
     */
    public function deliveryValue(int $deliveryValue)
    {
        $this->deliveryValue = $deliveryValue;
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
            // 'EmbossingName'       => $this->embossingName,
            // 'EmbossingNameType'   => $this->embossingNameType,
            'CardOwner'           => array_merge($this->cardOwner->toArray(), [
                'RateValueType'       => $this->rateValueType,
                'RateValue'           => array_sum([$this->rateValue, $this->deliveryValue]),
            ]),
            'CardHolder'          => $this->cardHolder->toArray(),
            'CardHolderContact'   => $this->cardHolderContact->toArray(),
            'BillingAddress'      => $this->billingAddress->toArray(),
            'CardDeliveryAddress' => $this->cardDeliveryAddress->toArray(),
        ], function($value) {
            return !is_null($value);
        });
    }

    


}