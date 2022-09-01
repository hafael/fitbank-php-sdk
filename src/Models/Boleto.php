<?php

namespace Hafael\Fitbank\Models;

class Boleto
{
    
    const TYPE_CHARGE             = 0;
    const TYPE_CASHIN             = 1;
    const CHARGE_RECURRING        = true;
    const CHARGE_SINGLE           = false;

    const RATE_DEFAULT            = 1;
    const RATE_SENT_ON_REQUEST    = 0;
    const RATE_NO_CHARGE          = 2;

    const STATUS_CREATED          = 0;
    const STATUS_CAN_BE_REGISTRED = 1;
    const STATUS_REGISTERING      = 2;
    const STATUS_REGISTERED       = 3;
    const STATUS_REJECTED         = 4;
    const STATUS_SETTLED          = 5;
    const STATUS_PAID             = 6;
    const STATUS_CANCELED         = 7;
    const STATUS_INTERNAL_ERROR   = 8;
    const STATUS_BALANCE_ERROR    = 9;

    /**
     * @var int
     */
    public $mktPlaceId;
    
    /**
     * @var int
     */
    public $groupTemplate = 2;

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
    public $addressLine2;

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
     * @var string
     */
    public $comments;

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
     * @var string
     */
    public $discountDate;

    /**
     * @var float
     */
    public $finePercent = 0;

    /**
     * @var int
     */
    public $rateValueType = self::RATE_DEFAULT;

    /**
     * @var float
     */
    public $rateValue = 0;
    
    /**
     * @var int
     */
    public $rateSent = 0;

    /**
     * @var float
     */
    public $totalValue = 0;

    /**
     * @var float
     */
    public $fineValue = 0;

    /**
     * @var float
     */
    public $rebateValue = 0;

    /**
     * @var float
     */
    public $discountValue = 0;

    /**
     * @var float
     */
    public $interestValue = 0;

    /**
     * @var float
     */
    public $interestPercent = 0;

    /**
     * @var int
     */
    public $installmentsNumber = 1;

    /**
     * @var boolean
     */
    public $chargeType = self::TYPE_CHARGE;

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
        if(isset($data['addressLine2'])) {
            $this->addressLine1($data['addressLine2']);
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
        if(isset($data['comments'])) {
            $this->comments($data['comments']);
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
        if(isset($data['discountDate'])) {
            $this->discountDate($data['discountDate']);
        }
        if(isset($data['finePercent'])) {
            $this->finePercent($data['finePercent']);
        }
        if(isset($data['fineValue'])) {
            $this->fineValue($data['fineValue']);
        }
        if(isset($data['rateValueType'])) {
            $this->rateValueType($data['rateValueType']);
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
        if(isset($data['interestPercent'])) {
            $this->interestPercent($data['interestPercent']);
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
     * @param string $addressLine2
     */
    public function addressLine2(string $addressLine2)
    {
        $this->addressLine2 = $addressLine2;
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
     * @param string $comments
     */
    public function comments(string $comments)
    {
        $this->comments = $comments;
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
     * @param string $discountDate
     */
    public function discountDate(string $discountDate)
    {
        $this->discountDate = $discountDate;
        return $this;
    }

    /**
     * @param float $finePercent
     */
    public function finePercent(float $finePercent)
    {
        $this->finePercent = $finePercent;
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
     * @param int $rateValueType
     */
    public function rateValueType(int $rateValueType)
    {
        $this->rateValueType = $rateValueType;
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
     * @param int $rateSent
     */
    public function rateSent(int $rateSent)
    {
        $this->rateSent = $rateSent;
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
     * @param float $rebateValue
     */
    public function rebateValue(float $rebateValue)
    {
        $this->rebateValue = $rebateValue;
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
     * @param float $interestValue
     */
    public function interestValue(float $interestValue)
    {
        $this->interestValue = $interestValue;
        return $this;
    }

    /**
     * @param float $interestPercent
     */
    public function interestPercent(float $interestPercent)
    {
        $this->interestPercent = $interestPercent;
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
     * @return bool
     */
    public function isCashin()
    {
        return $this->chargeType == 1;
    }

    /**
     * @return bool
     */
    public function isRecurring()
    {
        return $this->installmentsNumber > 1;
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
            'AddressLine2'             => $this->addressLine2,
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
            'DiscountDate'             => $this->discountDate,
            'FinePercent'              => $this->finePercent,
            'RateValue'                => $this->rateValue,
            'RateValueType'            => $this->rateValueType,
            'Ratesent'                 => $this->rateSent,
            'TotalValue'               => $this->totalValue,
            'RebateValue'              => $this->rebateValue,
            'DiscountValue'            => $this->discountValue,
            'InterestValue'            => $this->interestValue,
            'InterestPercent'          => $this->interestPercent,
            'InstallmentsNumber'       => $this->installmentsNumber,
            'Comments'                 => $this->comments,
            'Carnet'                   => $this->isRecurring(),
            'Products'                 => array_map(function($product) {return $product->toArray(); }, $this->products),
        ], function($value) {
            return (is_array($value) && !empty($value)) || ((is_string($value) || is_numeric($value)) && !is_null($value) && $value != '');
        });
    }

}