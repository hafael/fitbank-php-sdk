<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\AtmAvailability;
use Hafael\Fitbank\Models\AtmInfo;
use Hafael\Fitbank\Models\DigitalWithdrawal;
use Hafael\Fitbank\Models\DigitalWithdrawalAuthorization;
use Hafael\Fitbank\Models\DigitalWithdrawalCancellation;
use Hafael\Fitbank\Models\DigitalWithdrawalQrCode;
use Hafael\Fitbank\Models\DigitalWithdrawalStatus;
use Hafael\Fitbank\Route;

class Withdrawal extends Api
{

    /**
     * GetBankTerminalInfosList
     * 
     * @param AtmAvailability $atmAvailability
     * @return mixed
     */
    public function getBankTerminalInfosList(AtmAvailability $atmAvailability)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetBankTerminalInfosList',
        ], $atmAvailability->toArray())));
    }

    /**
     * GetBankTerminalInfos
     * 
     * @param AtmInfo $atm
     * @return mixed
     */
    public function getBankTerminalInfos(AtmInfo $atm)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetBankTerminalInfos',
        ], $atm->toArray())));
    }
    
    /**
     * GenerateDigitalWithdrawal
     * 
     * @param MoneyTransferOut $transfer
     * @return mixed
     */
    public function generateDigitalWithdrawal(DigitalWithdrawal $withdrawal)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GenerateDigitalWithdrawal',
        ], $withdrawal->toArray())));
    }

    
    /**
     * GetInfosByTokenDigitalWithdrawal
     * 
     * @param DigitalWithdrawalQrCode $code
     * @return mixed
     */
    public function getInfosByTokenDigitalWithdrawal(DigitalWithdrawalQrCode $code)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetInfosByTokenDigitalWithdrawal',
        ], $code->toArray())));
    }

    /**
     * AuthorizeDigitalWithdrawal
     * 
     * @param DigitalWithdrawalAuthorization $authorization
     * @return mixed
     */
    public function authorizeDigitalWithdrawal(DigitalWithdrawalAuthorization $authorization)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'AuthorizeDigitalWithdrawal',
        ], $authorization->toArray())));
    }

    /**
     * CancelDigitalWithdrawal
     * 
     * @param DigitalWithdrawalCancellation $cancellation
     * @return mixed
     */
    public function cancelDigitalWithdrawal(DigitalWithdrawalCancellation $cancellation)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'CancelDigitalWithdrawal',
        ], $cancellation->toArray())));
    }

    /**
     * GetDigitalWithdrawal
     * 
     * @param DigitalWithdrawalStatus $status
     * @return mixed
     */
    public function getDigitalWithdrawal(DigitalWithdrawalStatus $status)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetDigitalWithdrawal',
        ], $status->toArray())));
    }

}