<?php

namespace Hafael\Fitbank\Models;

class PaymentFGTS
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
     * @var string
     */
    public $barcode;

    /**
     * @var string
     */
    public $paymentDate;

    /**
     * @var float
     */
    public $principalValue;

    /**
     * @var string
     */
    public $codeRevenue;

    /**
     * @var string
     */
    public $fgtsIdentifier;

    /**
     * @var string
     */
    public $socialConnectivityCode;

    /**
     * @var string
     */
    public $socialConnectivityDigit;

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
        if(isset($data['barcode'])) {
            $this->barcode($data['barcode']);
        }
        if(isset($data['paymentDate'])) {
            $this->paymentDate($data['paymentDate']);
        }
        if(isset($data['principalValue'])) {
            $this->principalValue($data['principalValue']);
        }
        if(isset($data['fgtsIdentifier'])) {
            $this->fgtsIdentifier($data['fgtsIdentifier']);
        }
        if(isset($data['socialConnectivityCode'])) {
            $this->socialConnectivityCode($data['socialConnectivityCode']);
        }
        if(isset($data['socialConnectivityDigit'])) {
            $this->socialConnectivityDigit($data['socialConnectivityDigit']);
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
     * @param string $barcode
     */
    public function barcode(string $barcode)
    {
        $this->barcode = $barcode;
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
     * @param string $socialConnectivityCode
     */
    public function socialConnectivityCode(string $socialConnectivityCode)
    {
        $this->socialConnectivityCode = $socialConnectivityCode;
        return $this;
    }

    /**
     * @param string $socialConnectivityDigit
     */
    public function socialConnectivityDigit(string $socialConnectivityDigit)
    {
        $this->socialConnectivityDigit = $socialConnectivityDigit;
        return $this;
    }

    /**
     * @param string $fgtsIdentifier
     */
    public function fgtsIdentifier(string $fgtsIdentifier)
    {
        $this->fgtsIdentifier = $fgtsIdentifier;
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
     * @param int $paymentSubType
     */
    public function paymentSubType(int $paymentSubType)
    {
        $this->paymentSubType = $paymentSubType;
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
            'ContributorTaxNumber'    => $this->contributorTaxNumber,
            
            'Bank'                    => $this->bank,
            'BankBranch'              => $this->bankBranch,
            'BankAccount'             => $this->bankAccount,
            'BankAccountDigit'        => $this->bankAccountDigit,

            'PhoneToSend'             => $this->phoneToSend,
            'MailToSend'              => $this->mailToSend,

            'FgtsIdentifier'          => $this->fgtsIdentifier,
            'Barcode'                 => $this->barcode,
            'PrincipalValue'          => $this->principalValue,
            'PaymentDate'             => $this->paymentDate,
            'SocialConnectivityCode'  => $this->socialConnectivityCode,
            'SocialConnectivityDigit' => $this->socialConnectivityDigit,
            'CodeRevenue'             => $this->codeRevenue,
            
            'Description'             => $this->description,
            'Identifier'              => $this->identifier,

            'RateValue'               => $this->rateValue,
            'RateValueType'           => $this->rateValueType,

            
        ], function($value) {
            return !is_null($value);
        });
    }
}