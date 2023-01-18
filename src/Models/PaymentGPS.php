<?php

namespace Hafael\Fitbank\Models;

class PaymentGPS
{

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var string
     */
    public $contributorTaxNumber;

    /**
     * @var int
     */
    public $contributorDocumentType;

    /**
     * @var int
     */
    public $referenceNumber;

    /**
     * @var string
     */
    public $paymentCode;

    /**
     * @var string
     */
    public $jurisdictionDate;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var string
     */
    public $paymentDate;

    /**
     * @var float
     */
    public $principalValue;

    /**
     * @var float
     */
    public $fineInterestValue;

    /**
     * @var float
     */
    public $otherValues;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $description;

    /**
     * @var float
     */
    public $rateValue = 0;

    /**
     * @var int
     */
    public $rateValueType = 0;

    /**
     * @var string
     */
    public $bank;

    /**
     * @var string
     */
    public $bankBranch;

    /**
     * @var string
     */
    public $bankAccount;

    /**
     * @var string
     */
    public $bankAccountDigit;

    /**
     * @var string
     */
    public $mailToSend;

    /**
     * @var string
     */
    public $phoneToSend;


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
        if(isset($data['contributorTaxNumber'])) {
            $this->contributorTaxNumber($data['contributorTaxNumber']);
        }
        if(isset($data['contributorDocumentType'])) {
            $this->contributorDocumentType($data['contributorDocumentType']);
        }
        if(isset($data['paymentCode'])) {
            $this->paymentCode($data['paymentCode']);
        }
        if(isset($data['jurisdictionDate'])) {
            $this->jurisdictionDate($data['jurisdictionDate']);
        }
        if(isset($data['paymentDate'])) {
            $this->paymentDate($data['paymentDate']);
        }
        if(isset($data['principalValue'])) {
            $this->principalValue($data['principalValue']);
        }
        if(isset($data['fineInterestValue'])) {
            $this->fineInterestValue($data['fineInterestValue']);
        }
        if(isset($data['otherValues'])) {
            $this->otherValues($data['otherValues']);
        }
        if(isset($data['referenceNumber'])) {
            $this->referenceNumber($data['referenceNumber']);
        }
        if(isset($data['dueDate'])) {
            $this->dueDate($data['dueDate']);
        }
        if(isset($data['identifier'])) {
            $this->identifier($data['identifier']);
        }
        if(isset($data['description'])) {
            $this->description($data['description']);
        }
        if(isset($data['rateValue'])) {
            $this->rateValue($data['rateValue']);
        }
        if(isset($data['rateValueType'])) {
            $this->rateValueType($data['rateValueType']);
        }
        if(isset($data['bank'])) {
            $this->bank($data['bank']);
        }
        if(isset($data['bankBranch'])) {
            $this->bankBranch($data['bankBranch']);
        }
        if(isset($data['bankAccount'])) {
            $this->bankAccount($data['bankAccount']);
        }
        if(isset($data['bankAccountDigit'])) {
            $this->bankAccountDigit($data['bankAccountDigit']);
        }
        if(isset($data['mailToSend'])) {
            $this->mailToSend($data['mailToSend']);
        }
        if(isset($data['phoneToSend'])) {
            $this->phoneToSend($data['phoneToSend']);
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
     * @param int $contributorDocumentType
     */
    public function contributorDocumentType(int $contributorDocumentType)
    {
        $this->contributorDocumentType = $contributorDocumentType;
        return $this;
    }

    /**
     * @param string $contributorTaxNumber
     */
    public function contributorTaxNumber(string $contributorTaxNumber)
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
        return $this;
    }

    /**
     * @param string $paymentCode
     */
    public function paymentCode(string $paymentCode)
    {
        $this->paymentCode = $paymentCode;
        return $this;
    }

    /**
     * @param string $jurisdictionDate
     */
    public function jurisdictionDate(string $jurisdictionDate)
    {
        $this->jurisdictionDate = $jurisdictionDate;
        return $this;
    }

    /**
     * @param int $referenceNumber
     */
    public function referenceNumber(int $referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;
        return $this;
    }

    /**
     * @param string $dueDate
     */
    public function dueDate(string $dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * @param string $paymentDate
     */
    public function paymentDate(string $paymentDate)
    {
        $this->paymentDate = $paymentDate;
        return $this;
    }

    /**
     * @param float $principalValue
     */
    public function principalValue(float $principalValue)
    {
        $this->principalValue = $principalValue;
        return $this;
    }
    
    /**
     * @param float $fineInterestValue
     */
    public function fineInterestValue(float $fineInterestValue)
    {
        $this->fineInterestValue = $fineInterestValue;
        return $this;
    }

    /**
     * @param float $otherValues
     */
    public function otherValues(float $otherValues)
    {
        $this->otherValues = $otherValues;
        return $this;
    }

    /**
     * @param string $identifier
     */
    public function identifier(string $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * @param string $description
     */
    public function description(string $description)
    {
        $this->description = $description;
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
     * @param string $bank
     */
    public function bank($bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @param string $bankBranch
     */
    public function bankBranch($bankBranch)
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @param string $bankAccount
     */
    public function bankAccount($bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @param string $bankAccountDigit
     */
    public function bankAccountDigit($bankAccountDigit)
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @param string $phoneToSend
     */
    public function phoneToSend(string $phoneToSend)
    {
        $this->phoneToSend = $phoneToSend;
        return $this;
    }

    /**
     * @param string $mailToSend
     */
    public function mailToSend(string $mailToSend)
    {
        $this->mailToSend = $mailToSend;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'TaxNumber'               => $this->taxNumber,
            'ContributorDocumentType' => $this->contributorDocumentType,
            'ContributorTaxNumber'    => $this->contributorTaxNumber,
            
            'FromBank'                => $this->bank,
            'FromBankBranch'          => $this->bankBranch,
            'FromBankAccount'         => $this->bankAccount,
            'FromBankAccountDigit'    => $this->bankAccountDigit,

            'PhoneToSend'             => $this->phoneToSend,
            'MailToSend'              => $this->mailToSend,

            'ReferenceNumber'         => $this->referenceNumber,
            'PaymentCode'             => $this->paymentCode,
            'JurisdictionDate'        => $this->jurisdictionDate,
            
            'DueDate'                 => $this->dueDate,
            'PaymentDate'             => $this->paymentDate,
            
            'PrincipalValue'          => $this->principalValue,
            'FineInterestValue'       => $this->fineInterestValue,
            'OtherValues'             => $this->otherValues,
            
            'Description'             => $this->description,
            'Identifier'              => $this->identifier,

            'RateValue'               => $this->rateValue,
            'RateValueType'           => $this->rateValueType,

            
        ], function($value) {
            return !is_null($value);
        });
    }
}