<?php

namespace Hafael\Fitbank\Models;

class PaymentDARJ
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
    public $referenceNumber;

    /**
     * @var string
     */
    public $originDocument;

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
    public $monetaryValue;

    /**
     * @var float
     */
    public $fineValue;

    /**
     * @var float
     */
    public $interestValue;

    /**
     * @var float
     */
    public $totalValue;

    /**
     * @var string
     */
    public $codeRevenue;

    /**
     * @var string
     */
    public $stateRegistration;

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
        if(isset($data['codeRevenue'])) {
            $this->codeRevenue($data['codeRevenue']);
        }
        if(isset($data['originDocument'])) {
            $this->originDocument($data['originDocument']);
        }
        if(isset($data['paymentDate'])) {
            $this->paymentDate($data['paymentDate']);
        }
        if(isset($data['principalValue'])) {
            $this->principalValue($data['principalValue']);
        }
        if(isset($data['monetaryValue'])) {
            $this->monetaryValue($data['monetaryValue']);
        }
        if(isset($data['fineValue'])) {
            $this->fineValue($data['fineValue']);
        }
        if(isset($data['interestValue'])) {
            $this->interestValue($data['interestValue']);
        }
        if(isset($data['totalValue'])) {
            $this->totalValue($data['totalValue']);
        }
        if(isset($data['stateRegistration'])) {
            $this->stateRegistration($data['stateRegistration']);
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
     * @param string $contributorTaxNumber
     */
    public function contributorTaxNumber(string $contributorTaxNumber)
    {
        $this->contributorTaxNumber = $contributorTaxNumber;
        return $this;
    }

    /**
     * @param string $codeRevenue
     */
    public function codeRevenue(string $codeRevenue)
    {
        $this->codeRevenue = $codeRevenue;
        return $this;
    }

    /**
     * @param string $originDocument
     */
    public function originDocument(string $originDocument)
    {
        $this->originDocument = $originDocument;
        return $this;
    }

    /**
     * @param string $stateRegistration
     */
    public function stateRegistration(string $stateRegistration)
    {
        $this->stateRegistration = $stateRegistration;
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
     * @param float $monetaryValue
     */
    public function monetaryValue(float $monetaryValue)
    {
        $this->monetaryValue = $monetaryValue;
        return $this;
    }
    
    /**
     * @param float $fineValue
     */
    public function fineValue(float $fineValue)
    {
        $this->fineValue = $fineValue;
        return $this;
    }

    /**
     * @param float $interestValue
     */
    public function interestValue(float $interestValue)
    {
        $this->interestValue = $interestValue;
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
            'TaxNumber'            => $this->taxNumber,
            'ContributorTaxNumber' => $this->contributorTaxNumber,
            
            'FromBank'             => $this->bank,
            'FromBankBranch'       => $this->bankBranch,
            'FromBankAccount'      => $this->bankAccount,
            'FromBankAccountDigit' => $this->bankAccountDigit,

            'PhoneToSend'          => $this->phoneToSend,
            'MailToSend'           => $this->mailToSend,

            'StateRegistration'    => $this->stateRegistration,
            'ReferenceNumber'      => $this->referenceNumber,
            'DueDate'              => $this->dueDate,
            'CodeRevenue'          => $this->codeRevenue,

            'PrincipalValue'       => $this->principalValue,
            'MonetaryValue'        => $this->monetaryValue,
            'FineValue'            => $this->fineValue,
            'InterestValue'        => $this->interestValue,
            'TotalValue'           => $this->totalValue,
            'PaymentDate'          => $this->paymentDate,
            
            'Description'          => $this->description,
            'Identifier'           => $this->identifier,

            'RateValue'            => $this->rateValue,
            'RateValueType'        => $this->rateValueType,

            
        ], function($value) {
            return !is_null($value);
        });
    }
}