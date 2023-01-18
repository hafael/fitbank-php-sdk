<?php

namespace Hafael\Fitbank\Models;

class MultipleP2PTransfer
{

    const STATUS_CREATED = 0;
    const STATUS_PAID = 1;
    const STATUS_CANCELED = 2;

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var BankAccount
     */
    public $bank;
    
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
     * @var string
     */
    public $identifier;

    /**
     * @var array
     */
    public $tags;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $transferDate;

    /**
     * @var int
     */
    public $status;

    /**
     * @var array
     */
    public $internalTransfers;

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
        if(isset($data['bank'])) {
            $this->bank($data['bank']);
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
        if(isset($data['tags'])) {
            $this->tags($data['tags']);
        }
        if(isset($data['description'])) {
            $this->description($data['description']);
        }
        if(isset($data['transferDate'])) {
            $this->transferDate($data['transferDate']);
        }
        if(isset($data['internalTransfers'])) {
            $this->internalTransfers($data['internalTransfers']);
        }
        if(isset($data['status'])) {
            $this->status($data['status']);
        }
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
     * @param string $taxNumber
     */
    public function taxNumber(string $taxNumber)
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @param BankAccount $bank
     */
    public function bank(BankAccount $bank)
    {
        $this->bank = $bank;
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
     * @param array $tags
     */
    public function tags(array $tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @param string $description
     */
    public function description(array $description)
    {
        $this->description = $description;
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
     * @param array $internalTransfers
     */
    public function internalTransfers(array $internalTransfers)
    {

        if(is_array($internalTransfers)) {
            foreach($internalTransfers as $transfer)
            {
                if($transfer instanceof P2PReceiver ) {
                    $this->addTransfer($transfer);
                }else if(is_array($transfer) && !empty($transfer)) {
                    $this->addTransfer(new P2PReceiver($transfer));
                }
            }
        }

        return $this;
    }

    /**
     * @param array $internalTransfers
     */
    public function addTransfer(P2PReceiver $transfer)
    {
        $this->internalTransfers[] = $transfer;

        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'TaxNumber'            => !empty($this->bank) ? $this->bank->taxNumber : $this->taxNumber,
            'Bank'                 => $this->bank->bank,
            'BankBranch'           => $this->bank->bankBranch,
            'BankAccount'          => $this->bank->bankAccount,
            'BankAccountDigit'     => $this->bank->bankAccountDigit,
            'InternalTransfers'    => array_map(function($t) {
                return $t->toArray();
            }, $this->internalTransfers),
            'TotalValue'           => $this->totalValue,
            'RateValue'            => $this->rateValue,
            'RateValueType'        => $this->rateValueType,
            'Tags'                 => $this->tags,
            'Description'          => $this->description,
            'TransferDate'         => $this->transferDate,
        ], function($value) {
            return !is_null($value);
        });
    }


}