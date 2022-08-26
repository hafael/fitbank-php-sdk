<?php

namespace Hafael\Fitbank\Models;

class BoletoOut
{

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $taxNumber;
    
    /**
     * @var string
     */
    public $beneficiaryName;

    /**
     * @var string
     */
    public $beneficiaryTaxNumber;

    /**
     * @var string
     */
    public $guarantorName;

    /**
     * @var string
     */
    public $guarantorTaxNumber;

    /**
     * @var string
     */
    public $payerName;

    /**
     * @var string
     */
    public $payerTaxNumber;
    
    /**
     * @var string
     */
    public $barcode;

    /**
     * @var string
     */
    public $paymentDate;

    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var float
     */
    public $principalValue;

    /**
     * @var float
     */
    public $discountValue;

    /**
     * @var float
     */
    public $extraValue;

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
     * @var int
     */
    public $paymentSubType = 0;

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
     * @var string
     */
    public $feePayerFullName;

    /**
     * @var string
     */
    public $feePayerTaxNumber;

    /**
     * @var string
     */
    public $feePayerMail;

    /**
     * @var string
     */
    public $feePayerBank;

    /**
     * @var string
     */
    public $feePayerBankBranch;

    /**
     * @var string
     */
    public $feePayerBankAccount;

    /**
     * @var string
     */
    public $feePayerBankAccountDigit;

    /**
     * @var string
     */
    public $feePayerTradingName;

    /**
     * @var string
     */
    public $feePayerLegalName;

    /**
     * @var string
     */
    public $feePayerIdentityDocument;


    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['name'])) {
            $this->name($data['name']);
        }
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
        if(isset($data['beneficiaryName'])) {
            $this->beneficiaryName($data['beneficiaryName']);
        }
        if(isset($data['beneficiaryTaxNumber'])) {
            $this->beneficiaryTaxNumber($data['beneficiaryTaxNumber']);
        }
        if(isset($data['guarantorName'])) {
            $this->guarantorName($data['guarantorName']);
        }
        if(isset($data['guarantorTaxNumber'])) {
            $this->guarantorTaxNumber($data['guarantorTaxNumber']);
        }
        if(isset($data['payerName'])) {
            $this->payerName($data['payerName']);
        }
        if(isset($data['payerTaxNumber'])) {
            $this->payerTaxNumber($data['payerTaxNumber']);
        }
        if(isset($data['barcode'])) {
            $this->barcode($data['barcode']);
        }
        if(isset($data['paymentDate'])) {
            $this->paymentDate($data['paymentDate']);
        }
        if(isset($data['dueDate'])) {
            $this->dueDate($data['dueDate']);
        }
        if(isset($data['principalValue'])) {
            $this->principalValue($data['principalValue']);
        }
        if(isset($data['discountValue'])) {
            $this->discountValue($data['discountValue']);
        }
        if(isset($data['extraValue'])) {
            $this->extraValue($data['extraValue']);
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
        if(isset($data['paymentSubType'])) {
            $this->paymentSubType($data['paymentSubType']);
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

        if(isset($data['feePayerFullName'])) {
            $this->feePayerFullName($data['feePayerFullName']);
        }
        if(isset($data['feePayerMail'])) {
            $this->feePayerMail($data['feePayerMail']);
        }
        if(isset($data['feePayerBank'])) {
            $this->feePayerBank($data['feePayerBank']);
        }
        if(isset($data['feePayerBankBranch'])) {
            $this->feePayerBankBranch($data['feePayerBankBranch']);
        }
        if(isset($data['feePayerBankAccount'])) {
            $this->feePayerBankAccount($data['feePayerBankAccount']);
        }
        if(isset($data['feePayerBankAccountDigit'])) {
            $this->feePayerBankAccountDigit($data['feePayerBankAccountDigit']);
        }
        if(isset($data['feePayerTradingName'])) {
            $this->feePayerTradingName($data['feePayerTradingName']);
        }
        if(isset($data['feePayerLegalName'])) {
            $this->feePayerLegalName($data['feePayerLegalName']);
        }
        if(isset($data['feePayerIdentityDocument'])) {
            $this->feePayerIdentityDocument($data['feePayerIdentityDocument']);
        }
    }

    /**
     * @param string $name
     */
    public function name(string $name)
    {
        $this->name = $name;
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
     * @param string $beneficiaryName
     */
    public function beneficiaryName(string $beneficiaryName)
    {
        $this->beneficiaryName = $beneficiaryName;
        return $this;
    }

    /**
     * @param string $beneficiaryTaxNumber
     */
    public function beneficiaryTaxNumber(string $beneficiaryTaxNumber)
    {
        $this->beneficiaryTaxNumber = $beneficiaryTaxNumber;
        return $this;
    }

    /**
     * @param string $guarantorName
     */
    public function guarantorName(string $guarantorName)
    {
        $this->guarantorName = $guarantorName;
        return $this;
    }

    /**
     * @param string $guarantorTaxNumber
     */
    public function guarantorTaxNumber(string $guarantorTaxNumber)
    {
        $this->guarantorTaxNumber = $guarantorTaxNumber;
        return $this;
    }

    /**
     * @param string $payerName
     */
    public function payerName(string $payerName)
    {
        $this->payerName = $payerName;
        return $this;
    }

    /**
     * @param string $payerTaxNumber
     */
    public function payerTaxNumber(string $payerTaxNumber)
    {
        $this->payerTaxNumber = $payerTaxNumber;
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
     * @param string $dueDate
     */
    public function dueDate(string $dueDate)
    {
        $this->dueDate = $dueDate;
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
     * @param float $extraValue
     */
    public function extraValue(float $extraValue)
    {
        $this->extraValue = $extraValue;
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
     * @param string $feePayerFullName
     */
    public function feePayerFullName(string $feePayerFullName)
    {
        $this->feePayerFullName = $feePayerFullName;
        return $this;
    }

    /**
     * @param string $feePayerTaxNumber
     */
    public function feePayerTaxNumber(string $feePayerTaxNumber)
    {
        $this->feePayerTaxNumber = $feePayerTaxNumber;
        return $this;
    }

    /**
     * @param string $feePayerMail
     */
    public function feePayerMail(string $feePayerMail)
    {
        $this->feePayerMail = $feePayerMail;
        return $this;
    }

    /**
     * @param string $feePayerBank
     */
    public function feePayerBank(string $feePayerBank)
    {
        $this->feePayerBank = $feePayerBank;
        return $this;
    }

    /**
     * @param string $feePayerBankBranch
     */
    public function feePayerBankBranch(string $feePayerBankBranch)
    {
        $this->feePayerBankBranch = $feePayerBankBranch;
        return $this;
    }

    /**
     * @param string $feePayerBankAccount
     */
    public function feePayerBankAccount(string $feePayerBankAccount)
    {
        $this->feePayerBankAccount = $feePayerBankAccount;
        return $this;
    }

    /**
     * @param string $feePayerBankAccountDigit
     */
    public function feePayerBankAccountDigit(string $feePayerBankAccountDigit)
    {
        $this->feePayerBankAccountDigit = $feePayerBankAccountDigit;
        return $this;
    }

    /**
     * @param string $feePayerTradingName
     */
    public function feePayerTradingName(string $feePayerTradingName)
    {
        $this->feePayerTradingName = $feePayerTradingName;
        return $this;
    }

    /**
     * @param string $feePayerLegalName
     */
    public function feePayerLegalName(string $feePayerLegalName)
    {
        $this->feePayerLegalName = $feePayerLegalName;
        return $this;
    }
    
    /**
     * @param string $feePayerIdentityDocument
     */
    public function feePayerIdentityDocument(string $feePayerIdentityDocument)
    {
        $this->feePayerIdentityDocument = $feePayerIdentityDocument;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'Name'                     => $this->name,
            'TaxNumber'                => $this->taxNumber,
            'Bank'                     => $this->bank,
            'BankBranch'               => $this->bankBranch,
            'BankAccount'              => $this->bankAccount,
            'BankAccountDigit'         => $this->bankAccountDigit,

            'BeneficiaryName'          => $this->beneficiaryName,
            'BeneficiaryTaxNumber'     => $this->beneficiaryTaxNumber,

            'GuarantorName'            => $this->guarantorName,
            'GuarantorTaxNumber'       => $this->guarantorTaxNumber,

            'PayerName'                => $this->payerName,
            'PayerTaxNumber'           => $this->payerTaxNumber,

            'PhoneToSend'              => $this->phoneToSend,
            'MailToSend'               => $this->mailToSend,

            'Barcode'                  => $this->barcode,
            'PrincipalValue'           => $this->principalValue,
            'DiscountValue'            => $this->discountValue,
            'ExtraValue'               => $this->extraValue,
            'PaymentDate'              => $this->paymentDate,
            'DueDate'                  => $this->dueDate,
            'Description'              => $this->description,
            'Identifier'               => $this->identifier,

            'RateValue'                => $this->rateValue,
            'RateValueType'            => $this->rateValueType,
            'PaymentSubType'           => $this->paymentSubType,

            'FeePayerFullName'         => $this->feePayerFullName,
            'FeePayerTaxNumber'        => $this->feePayerTaxNumber,
            'FeePayerMail'             => $this->feePayerMail,
            'FeePayerBank'             => $this->feePayerBank,
            'FeePayerBankBranch'       => $this->feePayerBankBranch,
            'FeePayerBankAccount'      => $this->feePayerBankAccount,
            'FeePayerBankAccountDigit' => $this->feePayerBankAccountDigit,
            'FeePayerTradingName'      => $this->feePayerTradingName,
            'FeePayerLegalName'        => $this->feePayerLegalName,
            'FeePayerIdentityDocument' => $this->feePayerIdentityDocument,

            
        ], function($value) {
            return !is_null($value);
        });
    }
}