<?php

namespace Hafael\Fitbank\Models;

class Boleto
{

    const CHARGE_RECURRING = true;
    const CHARGE_SINGLE    = false;

    /**
     * @var int
     */
    public $mktPlaceId;
    
    /**
     * @var int
     */
    public $groupTemplate;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $customerTaxNumber;

    /**
     * @var string
     */
    public $customerMail;

    /**
     * @var string
     */
    public $customerPhone;

    /**
     * @var string
     */
    public $supplierTaxNumber;

    /**
     * @var string
     */
    public $supplierFullName;

    /**
     * @var string
     */
    public $supplierTradingName;

    /**
     * @var string
     */
    public $supplierLegalName;

    /**
     * @var string
     */
    public $supplierIdentityDocument;

    /**
     * @var string
     */
    public $supplierMail;

    /**
     * @var string
     */
    public $supplierPhone;

    /**
     * @var string
     */
    public $addressLine1;

    /**
     * @var string
     */
    public $neighborhood;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $zipCode;

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
    public $externalNumber;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var int
     */
    public $registration;
    
    /**
     * @var string
     */
    public $dueDate;

    /**
     * @var string
     */
    public $fineDate;

    /**
     * @var int
     */
    public $finePercent;

    /**
     * @var int
     */
    public $rateValue;
    
    /**
     * @var int
     */
    public $rateSent;

    /**
     * @var int
     */
    public $totalValue;

    /**
     * @var int
     */
    public $rebateValue;

    /**
     * @var int
     */
    public $discountValue;

    /**
     * @var int
     */
    public $interestValue;

    /**
     * @var int
     */
    public $installmentsNumber;

    /**
     * @var boolean
     */
    public $chargeType = self::CHARGE_SINGLE;

    /**
     * @var array
     */
    public $products;

    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['mktPlaceId'])) {
            $this->mktPlaceId($data['mktPlaceId']);
        }
        if(isset($data['groupTemplate'])) {
            $this->groupTemplate($data['groupTemplate']);
        }
        if(isset($data['customerName'])) {
            $this->customerName($data['customerName']);
        }
        if(isset($data['customerTaxNumber'])) {
            $this->customerTaxNumber($data['customerTaxNumber']);
        }
        if(isset($data['customerMail'])) {
            $this->customerMail($data['customerMail']);
        }
        if(isset($data['customerPhone'])) {
            $this->customerPhone($data['customerPhone']);
        }
        if(isset($data['supplierTaxNumber'])) {
            $this->supplierTaxNumber($data['supplierTaxNumber']);
        }
        if(isset($data['supplierFullName'])) {
            $this->supplierFullName($data['supplierFullName']);
        }
        if(isset($data['supplierTradingName'])) {
            $this->supplierTradingName($data['supplierTradingName']);
        }
        if(isset($data['supplierLegalName'])) {
            $this->supplierLegalName($data['supplierLegalName']);
        }
        if(isset($data['supplierIdentityDocument'])) {
            $this->supplierIdentityDocument($data['supplierIdentityDocument']);
        }
        if(isset($data['supplierMail'])) {
            $this->supplierMail($data['supplierMail']);
        }
        if(isset($data['supplierPhone'])) {
            $this->supplierPhone($data['supplierPhone']);
        }
        if(isset($data['addressLine1'])) {
            $this->addressLine1($data['addressLine1']);
        }
        if(isset($data['neighborhood'])) {
            $this->neighborhood($data['neighborhood']);
        }
        if(isset($data['city'])) {
            $this->city($data['city']);
        }
        if(isset($data['state'])) {
            $this->state($data['state']);
        }
        if(isset($data['zipCode'])) {
            $this->zipCode($data['zipCode']);
        }
        if(isset($data['mailToSend'])) {
            $this->mailToSend($data['mailToSend']);
        }
        if(isset($data['phoneToSend'])) {
            $this->phoneToSend($data['phoneToSend']);
        }
        if(isset($data['externalNumber'])) {
            $this->externalNumber($data['externalNumber']);
        }
        if(isset($data['identifier'])) {
            $this->identifier($data['identifier']);
        }
        if(isset($data['registration'])) {
            $this->registration($data['registration']);
        }
        if(isset($data['dueDate'])) {
            $this->dueDate($data['dueDate']);
        }
        if(isset($data['fineDate'])) {
            $this->fineDate($data['fineDate']);
        }
        if(isset($data['finePercent'])) {
            $this->finePercent($data['finePercent']);
        }
        if(isset($data['rateValue'])) {
            $this->rateValue($data['rateValue']);
        }
        if(isset($data['rateSent'])) {
            $this->rateSent($data['rateSent']);
        }
        if(isset($data['totalValue'])) {
            $this->totalValue($data['totalValue']);
        }
        if(isset($data['rebateValue'])) {
            $this->rebateValue($data['rebateValue']);
        }
        if(isset($data['discountValue'])) {
            $this->discountValue($data['discountValue']);
        }
        if(isset($data['interestValue'])) {
            $this->interestValue($data['interestValue']);
        }
        if(isset($data['installmentsNumber'])) {
            $this->installmentsNumber($data['installmentsNumber']);
        }
        if(isset($data['chargeType'])) {
            $this->chargeType($data['chargeType']);
        }
        if(isset($data['products'])) {
            $this->products($data['products']);
        }
    }

    /**
     * @param int $mktPlaceId
     */
    public function mktPlaceId(int $mktPlaceId)
    {
        $this->mktPlaceId = $mktPlaceId;
        return $this;
    }

    /**
     * @param int $groupTemplate
     */
    public function groupTemplate(int $groupTemplate)
    {
        $this->groupTemplate = $groupTemplate;
        return $this;
    }

    /**
     * @param string $customerName
     */
    public function customerName(string $customerName)
    {
        $this->customerName = $customerName;
        return $this;
    }

    /**
     * @param string $customerTaxNumber
     */
    public function customerTaxNumber(string $customerTaxNumber)
    {
        $this->customerTaxNumber = $customerTaxNumber;
        return $this;
    }

    /**
     * @param string $customerMail
     */
    public function customerMail(string $customerMail)
    {
        $this->customerMail = $customerMail;
        return $this;
    }

    /**
     * @param string $customerPhone
     */
    public function customerPhone(string $customerPhone)
    {
        $this->customerPhone = $customerPhone;
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
     * @param string $supplierFullName
     */
    public function supplierFullName(string $supplierFullName)
    {
        $this->supplierFullName = $supplierFullName;
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
     * @param string $supplierLegalName
     */
    public function supplierLegalName(string $supplierLegalName)
    {
        $this->supplierLegalName = $supplierLegalName;
        return $this;
    }

    /**
     * @param string $supplierIdentityDocument
     */
    public function supplierIdentityDocument(string $supplierIdentityDocument)
    {
        $this->supplierIdentityDocument = $supplierIdentityDocument;
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
     * @param string $addressLine1
     */
    public function addressLine1(string $addressLine1)
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * @param string $neighborhood
     */
    public function neighborhood(string $neighborhood)
    {
        $this->neighborhood = $neighborhood;
        return $this;
    }

    /**
     * @param string $city
     */
    public function city(string $city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @param string $state
     */
    public function state(string $state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @param string $zipCode
     */
    public function zipCode(string $zipCode)
    {
        $this->zipCode = $zipCode;
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
     * @param string $phoneToSend
     */
    public function phoneToSend(string $phoneToSend)
    {
        $this->phoneToSend = $phoneToSend;
        return $this;
    }

    /**
     * @param string $externalNumber
     */
    public function externalNumber(string $externalNumber)
    {
        $this->externalNumber = $externalNumber;
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
     * @param string $registration
     */
    public function registration(string $registration)
    {
        $this->registration = $registration;
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
     * @param string $fineDate
     */
    public function fineDate(string $fineDate)
    {
        $this->fineDate = $fineDate;
        return $this;
    }

    /**
     * @param int $finePercent
     */
    public function finePercent(int $finePercent)
    {
        $this->finePercent = $finePercent;
        return $this;
    }

    /**
     * @param int $rateValue
     */
    public function rateValue(int $rateValue)
    {
        $this->rateValue = $rateValue;
        return $this;
    }

    /**
     * @param int $rateSent
     */
    public function rateSent(int $rateSent)
    {
        $this->rateSent = $rateSent;
        return $this;
    }

    /**
     * @param int $totalValue
     */
    public function totalValue(int $totalValue)
    {
        $this->totalValue = $totalValue;
        return $this;
    }

    /**
     * @param int $rebateValue
     */
    public function rebateValue(int $rebateValue)
    {
        $this->rebateValue = $rebateValue;
        return $this;
    }

    /**
     * @param int $discountValue
     */
    public function discountValue(int $discountValue)
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * @param int $interestValue
     */
    public function interestValue(int $interestValue)
    {
        $this->interestValue = $interestValue;
        return $this;
    }

    /**
     * @param int $installmentsNumber
     */
    public function installmentsNumber(int $installmentsNumber)
    {
        $this->installmentsNumber = $installmentsNumber;
        return $this;
    }

    /**
     * @param bool $chargeType
     */
    public function chargeType(bool $chargeType)
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * @param array $products
     */
    public function products(array $products)
    {
        foreach($products as $product)
        {
            $this->products[] = new Product($product);
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
            'MktPlaceId'               => $this->mktPlaceId,
            'GroupTemplate'            => $this->groupTemplate,
            'CustomerName'             => $this->customerName,
            'CustomerTaxNumber'        => $this->customerTaxNumber,
            'CustomerMail'             => $this->customerMail,
            'CustomerPhone'            => $this->customerPhone,
            'SupplierTaxNumber'        => $this->supplierTaxNumber,
            'SupplierFullName'         => $this->supplierFullName,
            'SupplierTradingName'      => $this->supplierTradingName,
            'SupplierLegalName'        => $this->supplierLegalName,
            'SupplierMail'             => $this->supplierMail,
            'SupplierPhone'            => $this->supplierPhone,
            'SupplierIdentityDocument' => $this->supplierIdentityDocument,
            'AddressLine1'             => $this->addressLine1,
            'Neighborhood'             => $this->neighborhood,
            'City'                     => $this->city,
            'State'                    => $this->state,
            'ZipCode'                  => $this->zipCode,
            'MailToSend'               => $this->mailToSend,
            'PhoneToSend'              => $this->phoneToSend,
            'ExternalNumber'           => $this->externalNumber,
            'Identifier'               => $this->identifier,
            'Registration'             => $this->registration,
            'DueDate'                  => $this->dueDate,
            'FineDate'                 => $this->fineDate,
            'FinePercent'              => $this->finePercent,
            'RateValue'                => $this->rateValue,
            'RateSent'                 => $this->rateSent,
            'TotalValue'               => $this->totalValue,
            'RebateValue'              => $this->rebateValue,
            'DiscountValue'            => $this->discountValue,
            'InterestValue'            => $this->interestValue,
            'InstallmentsNumber'       => $this->installmentsNumber,
            'Carnet'                   => $this->chargeType === self::CHARGE_RECURRING ? true: false,
            'Products'                 => $this->products,
        ]);
    }

}