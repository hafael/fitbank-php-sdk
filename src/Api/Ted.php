<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\MoneyTransferIn;
use Hafael\Fitbank\Models\MoneyTransferOut;
use Hafael\Fitbank\Models\MoneyTransferQuery;
use Hafael\Fitbank\Route;

class Ted extends Api
{

    /**
     * MoneyTransfer
     * 
     * @param MoneyTransferOut $transfer
     * @return mixed
     */
    public function moneyTransfer(MoneyTransferOut $transfer)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'MoneyTransfer',
        ], $transfer->toArray())));
    }

    /**
     * GetMoneyTransferOutById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getMoneyTransferOutById(string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetMoneyTransferOutById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetMoneyTransferOut
     * 
     * @param MoneyTransferQuery $query
     * @return mixed
     */
    public function getMoneyTransferOut(MoneyTransferQuery $query)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetMoneyTransferOut',
        ], $query->toArray())));
    }

    /**
     * CancelMoneyTransfer
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelMoneyTransfer(string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'CancelMoneyTransfer',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * MoneyTransferIn
     * 
     * @param MoneyTransferIn $transfer
     * @return mixed
     */
    public function moneyTransferIn(MoneyTransferIn $transfer)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'MoneyTransferIn',
        ], $transfer->toArray())));
    }

    /**
     * GetMoneyTransferIn
     * 
     * @param string $documentNumber
     * @param string $taxNumber
     * @param array $options
     * @return mixed
     */
    public function getMoneyTransferIn(MoneyTransferQuery $query)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetMoneyTransferIn',
        ], $query->toArray())));
    }

    /**
     * GetMoneyTransferInById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getMoneyTransferInById(string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetMoneyTransferInById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * CancelMoneyTransferIn
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelMoneyTransferIn(string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'CancelMoneyTransferIn',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * ExpectedTransferDate
     * 
     * Method to inform the expected transfer date, returning the 
     * limit date that the transfer will be paid. 
     * Transfers only ocurr on working days.
     * 
     * @param string $transferDate YYYY-MM-DD
     * @return mixed
     */
    public function expectedTransferDate(string $transferDate)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'             => 'ExpectedDateTransfer',
            'ActualDateTransfer' => $transferDate,
        ]));
    }

    /**
     * GetBanks
     * 
     * Method that returns the Bank Name and Code.
     * 
     * @return mixed
     */
    public function getBanks()
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method' => 'GetBanks',
        ]));
    }
    

}