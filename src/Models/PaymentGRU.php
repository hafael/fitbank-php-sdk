<?php

namespace Hafael\Fitbank\Models;

class PaymentGRU
{

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var string
     */
    public $contributorName;
    
    /**
     * @var string
     */
    public $contributorTaxNumber;

    /**
     * @var int
     */
    public $referenceNumber;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $beneficiaryName;

    /**
     * @var string
     */
    public $managerUnit;

    /**
     * @var string
     */
    public $barcode;

    /**
     * @var string
     */
    public $competence;

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
     * @var float
     */
    public $discountValue;

    /**
     * @var float
     */
    public $otherDeductions;

    /**
     * @var float
     */
    public $otherValues;

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
        if(isset($data['contributorName'])) {
            $this->contributorName($data['contributorName']);
        }
        if(isset($data['contributorTaxNumber'])) {
            $this->contributorTaxNumber($data['contributorTaxNumber']);
        }
        if(isset($data['beneficiaryName'])) {
            $this->beneficiaryName($data['beneficiaryName']);
        }
        if(isset($data['managerUnit'])) {
            $this->managerUnit($data['managerUnit']);
        }
        if(isset($data['barcode'])) {
            $this->barcode($data['barcode']);
        }
        if(isset($data['competence'])) {
            $this->competence($data['competence']);
        }
        if(isset($data['codeRevenue'])) {
            $this->codeRevenue($data['codeRevenue']);
        }
        if(isset($data['paymentDate'])) {
            $this->paymentDate($data['paymentDate']);
        }
        if(isset($data['principalValue'])) {
            $this->principalValue($data['principalValue']);
        }
        if(isset($data['discountValue'])) {
            $this->discountValue($data['discountValue']);
        }
        if(isset($data['otherDeductions'])) {
            $this->otherDeductions($data['otherDeductions']);
        }
        if(isset($data['fineValue'])) {
            $this->fineValue($data['fineValue']);
        }
        if(isset($data['interestValue'])) {
            $this->interestValue($data['interestValue']);
        }
        if(isset($data['otherValues'])) {
            $this->otherValues($data['otherValues']);
        }
        if(isset($data['totalValue'])) {
            $this->totalValue($data['totalValue']);
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
     * @param string $contributorName
     */
    public function contributorName(string $contributorName)
    {
        $this->contributorName = $contributorName;
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
     * @param string $beneficiaryName
     */
    public function beneficiaryName(string $beneficiaryName)
    {
        $this->beneficiaryName = $beneficiaryName;
        return $this;
    }

    /**
     * @param string $managerUnit
     */
    public function managerUnit(string $managerUnit)
    {
        $this->managerUnit = $managerUnit;
        return $this;
    }

    /**
     * @param string $barcode
     */
    public function barcode(string $barcode)
    {
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * @param string $competence
     */
    public function competence(string $competence)
    {
        $this->competence = $competence;
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
     * @param float $discountValue
     */
    public function discountValue(float $discountValue)
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @param float $otherDeductions
     */
    public function otherDeductions(float $otherDeductions)
    {
        $this->otherDeductions = $otherDeductions;
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
     * @param float $otherValues
     */
    public function otherValues(float $otherValues)
    {
        $this->otherValues = $otherValues;
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
            'ContributorName'      => $this->contributorName,
            'ContributorTaxNumber' => $this->contributorTaxNumber,
            'BeneficiaryName'      => $this->beneficiaryName,
            
            'FromBank'             => $this->bank,
            'FromBankBranch'       => $this->bankBranch,
            'FromBankAccount'      => $this->bankAccount,
            'FromBankAccountDigit' => $this->bankAccountDigit,

            'PhoneToSend'          => $this->phoneToSend,
            'MailToSend'           => $this->mailToSend,

            'CodeRevenue'          => $this->codeRevenue,
            'Type'                 => $this->type,
            'Barcode'              => $this->barcode,
            'ReferenceNumber'      => $this->referenceNumber,
            'ManagerUnit'          => $this->managerUnit,
            'Competence'           => $this->competence,
            
            'DueDate'              => $this->dueDate,
            'PaymentDate'          => $this->paymentDate,
            
            'PrincipalValue'       => $this->principalValue,
            'DiscountValue'        => $this->discountValue,
            'OtherDeductions'      => $this->otherDeductions,
            'FineValue'            => $this->fineValue,
            'InterestValue'        => $this->interestValue,
            'OtherValues'          => $this->otherValues,
            'TotalValue'           => $this->totalValue,
            
            'Description'          => $this->description,
            'Identifier'           => $this->identifier,

            'RateValue'            => $this->rateValue,
            'RateValueType'        => $this->rateValueType,

            
        ], function($value) {
            return !is_null($value);
        });
    }
}