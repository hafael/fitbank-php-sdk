<?php

namespace Hafael\Fitbank\Models;

class MoneyTransferIn
{

    const STATUS_CREATED = 0;
    const STATUS_PAID = 1;
    const STATUS_CANCELED = 2;

    /**
     * @var string
     */
    public $documentNumber;
    
    /**
     * @var string
     */
    public $supplierName;

    /**
     * @var string
     */
    public $supplierTradingName;

    /**
     * @var string
     */
    public $supplierTaxNumber;

    /**
     * @var string
     */
    public $supplierMail;

    /**
     * @var string
     */
    public $supplierPhone;

    /**
     * @var BankAccount
     */
    public $fromBank;

    /**
     * @var BankAccount
     */
    public $toBank;

    /**
     * @var float
     */
    public $totalValue;

    /**
     * @var float
     */
    public $rateValue;

    /**
     * @var int
     */
    public $rateValueType;

    /**
     * @var array
     */
    public $products;

    /**
     * @var array
     */
    public $tags;

    /**
     * @var string
     */
    public $transferDate;

    /**
     * @var int
     */
    public $status;

    
    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['fromBank'])) {
            $this->fromBank($data['fromBank']);
        }
        if(isset($data['toBank'])) {
            $this->toBank($data['toBank']);
        }
        if(isset($data['supplierName'])) {
            $this->supplierName($data['supplierName']);
        }
        if(isset($data['supplierTradingName'])) {
            $this->supplierTradingName($data['supplierTradingName']);
        }
        if(isset($data['supplierTaxNumber'])) {
            $this->supplierTaxNumber($data['supplierTaxNumber']);
        }
        if(isset($data['supplierMail'])) {
            $this->supplierMail($data['supplierMail']);
        }
        if(isset($data['supplierPhone'])) {
            $this->supplierPhone($data['supplierPhone']);
        }
        if(isset($data['totalValue'])) {
            $this->totalValue($data['totalValue']);
        }
        if(isset($data['rateValue'])) {
            $this->rateValue($data['rateValue']);
        }
        if(isset($data['rateValueType'])) {
            $this->rateValueType($data['rateValueType']);
        }
        if(isset($data['products'])) {
            $this->products($data['products']);
        }
        if(isset($data['tags'])) {
            $this->tags($data['tags']);
        }
        if(isset($data['transferDate'])) {
            $this->transferDate($data['transferDate']);
        }
        if(isset($data['status'])) {
            $this->status($data['status']);
        }
    }

    /**
     * @param string $documentNumber
     */
    public function documentNumber(string $documentNumber)
    {
        $this->documentNumber = $documentNumber;
        return $this;
    }

    /**
     * @param BankAccount $fromBank
     */
    public function fromBank(BankAccount $fromBank)
    {
        $this->fromBank = $fromBank;
        return $this;
    }

    /**
     * @param BankAccount $toBank
     */
    public function toBank(BankAccount $toBank)
    {
        $this->toBank = $toBank;
        return $this;
    }

    /**
     * @param string $supplierName
     */
    public function supplierName(string $supplierName)
    {
        $this->supplierName = $supplierName;
        return $this;
    }

    /**
     * @param string $supplierTradingName
     */
    public function supplierTradingName(string $supplierTradingName)
    {
        $this->supplierTradingName = $supplierTradingName;
        return $this;
    }

    /**
     * @param string $supplierTaxNumber
     */
    public function supplierTaxNumber(string $supplierTaxNumber)
    {
        $this->supplierTaxNumber = $supplierTaxNumber;
        return $this;
    }

    /**
     * @param string $supplierMail
     */
    public function supplierMail(string $supplierMail)
    {
        $this->supplierMail = $supplierMail;
        return $this;
    }

    /**
     * @param string $supplierPhone
     */
    public function supplierPhone(string $supplierPhone)
    {
        $this->supplierPhone = $supplierPhone;
        return $this;
    }

    /**
     * @param float $totalValue
     */
    public function totalValue(float $totalValue)
    {
        $this->totalValue = $totalValue;
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
     * @param array $products
     */
    public function products(array $products)
    {
        foreach($products as $product)
        {
            if($product instanceof Product) {
                $this->products[] = $product;
            }else if (is_array($product)) {
                $this->products[] = new Product($product);
            }
        }
        return $this;
    }

    /**
     * @param array $tags
     */
    public function tags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @param string $transferDate
     */
    public function transferDate(string $transferDate)
    {
        $this->transferDate = $transferDate;
        return $this;
    }

    /**
     * @param int $status
     */
    public function status(int $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            //TransferIn
            'SupplierName'         => $this->supplierName,
            'SupplierTaxNumber'    => $this->supplierTaxNumber,
            'SupplierTradingName'  => $this->supplierTradingName,
            'SupplierMail'         => $this->supplierMail,
            'SupplierPhone'        => $this->supplierPhone,
            'ToBank'               => $this->toBank->bank,
            'ToBankBranch'         => $this->toBank->bankBranch,
            'ToBankAccount'        => $this->toBank->bankAccount,
            'ToBankAccountDigit'   => $this->toBank->bankAccountDigit,
            'FromName'             => $this->fromBank->name,
            'FromTaxnumber'        => $this->fromBank->taxNumber,
            'BankNumber'           => $this->fromBank->bank,
            'BankBranch'           => $this->fromBank->bankBranch,
            'BankAccount'          => $this->fromBank->bankAccount,
            'BankAccountDigit'     => $this->fromBank->bankAccountDigit,
            'TransferDate'         => $this->transferDate,
            'TotalValue'           => $this->totalValue,
            'RateValue'            => $this->rateValue,
            'Products'             => !empty($this->products) ? $this->products : [],
            'Tags'                 => $this->tags,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}