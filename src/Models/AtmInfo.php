<?php

namespace Hafael\Fitbank\Models;

class AtmInfo
{

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var string
     */
    public $terminalId;

    /**
     * @var string
     */
    public $originNsu;

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
        if(isset($data['terminalId'])) {
            $this->terminalId($data['terminalId']);
        }
        if(isset($data['originNsu'])) {
            $this->originNsu($data['originNsu']);
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
     * @param string $terminalId
     */
    public function terminalId(string $terminalId)
    {
        $this->terminalId = $terminalId;
        return $this;
    }

    /**
     * @param string $originNsu
     */
    public function originNsu(string $originNsu)
    {
        $this->originNsu = $originNsu;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'TaxNumber' => $this->taxNumber,
            'TerminalId'  => $this->terminalId,
            'OriginNSU' => $this->originNsu,
        ], function($value) {
            return !is_null($value);
        });
    }

    


}