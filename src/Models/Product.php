<?php

namespace Hafael\Fitbank\Models;

class Product
{

    const PERSON_TYPE = 0;
    const COMPANY_TYPE = 1;

    /**
     * @var int
     */
    public $sellerPersonType = self::PERSON_TYPE;

    /**
     * @var string
     */
    public $sellerName;

    /**
     * @var string
     */
    public $sellerTaxNumber;

    /**
     * @var int
     */
    public $receiverPersonType = self::PERSON_TYPE;

    /**
     * @var string
     */
    public $receiverName;

    /**
     * @var string
     */
    public $receiverTaxNumber;

    /**
     * @var int|string
     */
    public $reference;

    /**
     * @var int|string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $productQty = 1;

    /**
     * @var float
     */
    public $productValue;

    /**
     * @var bool
     */
    public $isAutomatic;

    /**
     * @var BankAccount
     */
    public $bank;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['sellerPersonType'])) {
            $this->sellerPersonType($data['sellerPersonType']);
        }
        if(isset($data['sellerName'])) {
            $this->sellerName($data['sellerName']);
        }
        if(isset($data['sellerTaxNumber'])) {
            $this->sellerTaxNumber($data['sellerTaxNumber']);
        }
        if(isset($data['receiverPersonType'])) {
            $this->receiverPersonType($data['receiverPersonType']);
        }
        if(isset($data['receiverName'])) {
            $this->receiverName($data['receiverName']);
        }
        if(isset($data['receiverTaxNumber'])) {
            $this->receiverTaxNumber($data['receiverTaxNumber']);
        }
        if(isset($data['reference'])) {
            $this->reference($data['reference']);
        }
        if(isset($data['productCode'])) {
            $this->productCode($data['productCode']);
        }
        if(isset($data['productName'])) {
            $this->productName($data['productName']);
        }
        if(isset($data['productQty'])) {
            $this->productQty($data['productQty']);
        }
        if(isset($data['productValue'])) {
            $this->productValue($data['productValue']);
        }
        if(isset($data['isAutomatic'])) {
            $this->isAutomatic($data['isAutomatic']);
        }
    }

    /**
     * @param int $sellerPersonType
     */
    public function sellerPersonType(int $sellerPersonType)
    {
        $this->sellerPersonType = $sellerPersonType;
        return $this;
    }

    /**
     * @param string $sellerName
     */
    public function sellerName(string $sellerName)
    {
        $this->sellerName = $sellerName;
        return $this;
    }

    /**
     * @param string $sellerTaxNumber
     */
    public function sellerTaxNumber(string $sellerTaxNumber)
    {
        $this->sellerTaxNumber = $sellerTaxNumber;
        return $this;
    }

    /**
     * @param int $receiverPersonType
     */
    public function receiverPersonType(int $receiverPersonType)
    {
        $this->receiverPersonType = $receiverPersonType;
        return $this;
    }

    /**
     * @param string $receiverName
     */
    public function receiverName(string $receiverName)
    {
        $this->receiverName = $receiverName;
        return $this;
    }

    /**
     * @param string $receiverTaxNumber
     */
    public function receiverTaxNumber(string $receiverTaxNumber)
    {
        $this->receiverTaxNumber = $receiverTaxNumber;
        return $this;
    }

    /**
     * @param int|string $reference
     */
    public function reference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @param int|string $productCode
     */
    public function productCode($productCode)
    {
        $this->productCode = $productCode;
        return $this;
    }

    /**
     * @param string $productName
     */
    public function productName(string $productName)
    {
        $this->productName = $productName;
        return $this;
    }

    /**
     * @param int $productQty
     */
    public function productQty(int $productQty)
    {
        $this->productQty = $productQty;
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
     * @param bool $isAutomatic
     */
    public function isAutomatic(bool $isAutomatic)
    {
        $this->isAutomatic = $isAutomatic;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'SellerPersonType'   => $this->sellerPersonType,
            'SellerName'         => $this->sellerName,
            'SellerTaxNumber'    => $this->sellerTaxNumber,
            'ReceiverPersonType' => $this->receiverPersonType,
            'ReceiverName'       => $this->receiverName,
            'ReceiverTaxNumber'  => $this->receiverTaxNumber,
            'Reference'          => $this->reference,
            'ProductCode'        => $this->productCode,
            'ProductName'        => $this->productName,
            'ProductQty'         => $this->productQty,
            'ProductValue'       => $this->productValue,
            'IsAutomatic'        => $this->isAutomatic,
            'Bank'               => empty($this->bank) ? null : $this->bank->bank,
            'BankBranch'         => empty($this->bank) ? null : $this->bank->bankBranch,
            'BankAccount'        => empty($this->bank) ? null : $this->bank->bankAccount,
            'BankAccountDigit'   => empty($this->bank) ? null : $this->bank->bankAccountDigit,
            'AccountType'        => empty($this->bank) ? null : $this->bank->accountType,
        ], function($value) {
            return !is_null($value);
        });
    }
}