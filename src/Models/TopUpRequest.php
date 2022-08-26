<?php

namespace Hafael\Fitbank\Models;

class TopUpRequest
{

    const TYPE_PHONE  = 0;
    const TYPE_TV = 1;

    /**
     * @var int
     */
    public $productType = self::TYPE_PHONE;

    /**
     * @var string
     */
    public $contractIdentifier;

    /**
     * @var string
     */
    public $batchIdentifier;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var float
     */
    public $productValue;

    /**
     * @var string
     */
    public $originNSU;

    /**
     * @var BankAccount
     */
    public $fromBank;


    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['productType'])) {
            $this->productType($data['productType']);
        }
        if(isset($data['contractIdentifier'])) {
            $this->contractIdentifier($data['contractIdentifier']);
        }
        if(isset($data['batchIdentifier'])) {
            $this->batchIdentifier($data['batchIdentifier']);
        }
        if(isset($data['productKey'])) {
            $this->productKey($data['productKey']);
        }
        if(isset($data['productValue'])) {
            $this->productValue($data['productValue']);
        }
        if(isset($data['originNSU'])) {
            $this->originNSU($data['originNSU']);
        }
        if(isset($data['fromBank'])) {
            $this->fromBank($data['fromBank']);
        }
    }

    /**
     * @param int $productType
     */
    public function productType(int $productType)
    {
        $this->productType = $productType;
        return $this;
    }

    /**
     * @param string $productType
     * @return int
     */
    public static function getProductTypeId(string $productType)
    {
        return [
            'PHONE' => self::TYPE_PHONE,
            'TV'    => self::TYPE_TV,
        ][$productType];
    }

    /**
     * @param string $contractIdentifier
     */
    public function contractIdentifier(string $contractIdentifier)
    {
        $this->contractIdentifier = $contractIdentifier;
        return $this;
    }

    /**
     * @param string $batchIdentifier
     */
    public function batchIdentifier(string $batchIdentifier)
    {
        $this->batchIdentifier = $batchIdentifier;
        return $this;
    }

    /**
     * @param string $productKey
     */
    public function productKey(string $productKey)
    {
        $this->productKey = $productKey;
        return $this;
    }

    /**
     * @param float $productValue
     */
    public function productValue(float $productValue)
    {
        $this->productValue = $productValue;
        return $this;
    }

    /**
     * @param string $originNSU
     */
    public function originNSU(string $originNSU)
    {
        $this->originNSU = $originNSU;
        return $this;
    }

    /**
     * @param array|BankAccount $fromBank
     */
    public function fromBank($fromBank)
    {
        if($fromBank instanceof BankAccount) {
            $this->fromBank = $fromBank;
        } else {
            $this->fromBank = new BankAccount($fromBank);
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
            'ContractIdentifier'     => $this->contractIdentifier,
            'ProductType'            => $this->productType,
            'BatchIdentifier'        => $this->batchIdentifier,
            'ProductKey'             => $this->productKey,
            'ProductValue'           => $this->productValue,
            'OriginNSU'              => $this->originNSU,
            'TaxNumber'              => $this->fromBank->taxNumber,
            'FromBank'               => $this->fromBank->bank,
            'FromBankBranch'         => $this->fromBank->bankBranch,
            'FromBankAccount'        => $this->fromBank->bankAccount,
            'FromBankAccountDigit'   => $this->fromBank->bankAccountDigit,
        ], function($value) {
            return !is_null($value);
        });
    }
}