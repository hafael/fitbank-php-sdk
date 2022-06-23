<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\Account;
use Hafael\Fitbank\Models\PixPayment;
use Hafael\Fitbank\Route;

class Pix extends Api
{

    /**
     * GeneratePixOut
     * 
     * @param PixPayment $pixPayment
     * @return mixed
     */
    public function generatePixOut(PixPayment $pixPayment)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GeneratePixOut',
        ], $pixPayment->toArray() )));
    }

    /**
     * GetPixOutById
     * 
     * @param Account $account
     * @return mixed
     */
    public function getPixOutById(Account $account, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetPixOutById',
            'DocumentNumber' => $documentNumber
        ], $account->toArray() )));
    }

    /**
     * GetPixOutByDate
     * 
     * @param Account $account
     * @return mixed
     */
    public function getPixOutByDate(Account $account, string $documentNumber, string $startDate, string $endDate, $pageIndex = 0, $pageSize = 10)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetPixOutByDate',
            'DocumentNumber' => $documentNumber
        ], $account->toArray() )));
    }

    /**
     * GetPixInByDate
     * 
     * @param Account $account
     * @return mixed
     */
    public function getPixInByDate(Account $account, string $documentNumber, string $startDate, string $endDate, $pageIndex = 0, $pageSize = 10)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GetPixInByDate',
            'DocumentNumber' => $documentNumber
        ], $account->toArray() )));
    }

    /**
     * CancelPixOut
     * 
     * @param Account $account
     * @return mixed
     */
    public function cancelPixOut(Account $account, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'CancelPixOut',
            'DocumentNumber' => $documentNumber
        ], $account->toArray() )));
    }


}