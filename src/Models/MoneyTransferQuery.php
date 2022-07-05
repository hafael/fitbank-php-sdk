<?php

namespace Hafael\Fitbank\Models;

class MoneyTransferQuery
{

    /**
     * @var string
     */
    public $documentNumber;

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var string
     */
    public $initialDate;

    /**
     * @var string
     */
    public $finalDate;

    /**
     * @var string
     */
    public $initialPaymentDate;

    /**
     * @var string
     */
    public $finalPaymentDate;

    /**
     * @var string
     */
    public $emissionDate;

    /**
     * @var string
     */
    public $schedulingDate;
    
    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['documentNumber'])) {
            $this->documentNumber($data['documentNumber']);
        }
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
        if(isset($data['initialDate'])) {
            $this->initialDate($data['initialDate']);
        }
        if(isset($data['finalDate'])) {
            $this->finalDate($data['finalDate']);
        }
        if(isset($data['initialPaymentDate'])) {
            $this->initialPaymentDate($data['initialPaymentDate']);
        }
        if(isset($data['finalPaymentDate'])) {
            $this->finalPaymentDate($data['finalPaymentDate']);
        }
        if(isset($data['emissionDate'])) {
            $this->emissionDate($data['emissionDate']);
        }
        if(isset($data['schedulingDate'])) {
            $this->schedulingDate($data['schedulingDate']);
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
     * @param string $taxNumber
     */
    public function taxNumber(string $taxNumber)
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @param string $initialDate
     */
    public function initialDate(string $initialDate)
    {
        $this->initialDate = $initialDate;
        return $this;
    }

    /**
     * @param string $finalDate
     */
    public function finalDate(string $finalDate)
    {
        $this->finalDate = $finalDate;
        return $this;
    }

    /**
     * @param string $initialPaymentDate
     */
    public function initialPaymentDate(string $initialPaymentDate)
    {
        $this->initialPaymentDate = $initialPaymentDate;
        return $this;
    }

    /**
     * @param string $finalPaymentDate
     */
    public function finalPaymentDate(string $finalPaymentDate)
    {
        $this->finalPaymentDate = $finalPaymentDate;
        return $this;
    }

    /**
     * @param string $emissionDate
     */
    public function emissionDate(string $emissionDate)
    {
        $this->emissionDate = $emissionDate;
        return $this;
    }

    /**
     * @param string $schedulingDate
     */
    public function schedulingDate(int $schedulingDate)
    {
        $this->schedulingDate = $schedulingDate;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'DocumentNumber',
            'TaxNumber',
            'InitialDate',
            'FinalDate',
            'InitialPaymentDate',
            'FinalPaymentDate',
            'EmissionDate',
            'SchedulingDate',
        ], function($value) {
            return !is_null($value);
        });
    }


}