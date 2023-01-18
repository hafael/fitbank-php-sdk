<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\Account;
use Hafael\Fitbank\Models\PixCollect;
use Hafael\Fitbank\Models\PixOut;
use Hafael\Fitbank\Models\PixPayment;
use Hafael\Fitbank\Models\PixRefund;
use Hafael\Fitbank\Route;

class Pix extends Api
{

    /**
     * GeneratePixOut
     * 
     * @param PixOut $pixOut
     * @return mixed
     */
    public function generatePixOut(PixOut $pixOut)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GeneratePixOut',
        ], $pixOut->toArray() )));
    }

    /**
     * GenerateStaticPixQRCode
     * 
     * @param PixCollect $pixCollect
     * @return mixed
     */
    public function generateStaticPixQRCode(PixCollect $pixCollect)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GenerateStaticPixQRCode',
        ], $pixCollect->toArray() )));
    }

    /**
     * GenerateDynamicPixQRCode
     * 
     * @param PixCollect $pixCollect
     * @return mixed
     */
    public function generateDynamicPixQRCode(PixCollect $pixCollect)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GenerateDynamicPixQRCode',
        ], $pixCollect->toArray() )));
    }

    /**
     * ChangeDynamicPixQRCode
     * 
     * @param PixCollect $pixCollect
     * @param string $documentNumber
     * @return mixed
     */
    public function changeDynamicPixQRCode(PixCollect $pixCollect, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'         => 'ChangeDynamicPixQRCode',
            'DocumentNumber' => $documentNumber,
        ], $pixCollect->toArray() )));
    }

    /**
     * GenerateDynamicPixQRCodeDueDate
     * 
     * @param PixCollect $pixCollect
     * @return mixed
     */
    public function generateDynamicPixQRCodeDueDate(PixCollect $pixCollect)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GenerateDynamicPixQRCodeDueDate',
        ], $pixCollect->toArray() )));
    }

    /**
     * ChangeDynamicPixQRCodeDueDate
     * 
     * @param PixCollect $pixCollect
     * @param string $documentNumber
     * @return mixed
     */
    public function changeDynamicPixQRCodeDueDate(PixCollect $pixCollect, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'         => 'ChangeDynamicPixQRCodeDueDate',
            'DocumentNumber' => $documentNumber,
        ], $pixCollect->toArray() )));
    }

    /**
     * GetPixQRCodeById
     * 
     * @param Account $account
     * @return mixed
     */
    public function getPixQRCodeById(string $taxNumber, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetPixQRCodeById',
            'TaxNumber'      => $taxNumber,
            'DocumentNumber' => $documentNumber
        ]));
    }

    /**
     * GetPixOutById
     * 
     * @param Account $account
     * @return mixed
     */
    public function getPixOutById(PixOut $pixOut, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'         => 'GetPixOutById',
            'DocumentNumber' => $documentNumber,
        ], $pixOut->toGetPixOutArray() )));
    }

    /**
     * GetPixOutByDate
     * 
     * @param Account $account
     * @param string $startDate
     * @param string $endDate
     * @param int $pageIndex
     * @param int $pageSize
     * @return mixed
     */
    public function getPixOutByDate(Account $account, $startDate, $endDate, $pageIndex = 0, $pageSize = 10)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'    => 'GetPixOutByDate',
            'StartDate' => $startDate,
            'EndDate'   => $endDate,
            'PageSize'  => $pageSize,
            'Index'     => $pageIndex,
        ], $account->toArray() )));
    }

    /**
     * GetPixInByDate
     * 
     * @param Account $account
     * @param string $startDate
     * @param string $endDate
     * @param int $pageIndex
     * @param int $pageSize
     * @return mixed
     */
    public function getPixInByDate(Account $account, $startDate, $endDate, $pageIndex = 0, $pageSize = 10)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'         => 'GetPixInByDate',
            'StartDate' => $startDate,
            'EndDate'   => $endDate,
            'PageSize'  => $pageSize,
            'Index'     => $pageIndex,
        ], $account->toArray() )));
    }

    /**
     * GetPixInById
     * 
     * @param Account $account
     * @param string $documentNumber
     * @return mixed
     */
    public function getPixInById(PixOut $pixOut, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'         => 'GetPixInById',
            'DocumentNumber' => $documentNumber,
        ], $pixOut->toGetPixOutArray() )));
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
            'Method'         => 'CancelPixOut',
            'DocumentNumber' => $documentNumber
        ], $account->toArray() )));
    }

    /**
     * CancelPixQRCode
     * 
     * @param string $taxNumber
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelPixQRCode(string $taxNumber, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'CancelPixQRCode',
            'TaxNumber'      => $taxNumber,
            'DocumentNumber' => $documentNumber
        ]));
    }

    /**
     * GetInfosPixHashCode
     * 
     * @param string $taxNumber
     * @param string $hashCode
     * @return mixed
     */
    public function getInfosPixHashCode(string $taxNumber, string $hashCode)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'    => 'GetInfosPixHashCode',
            'TaxNumber' => $taxNumber,
            'Hash'      => $hashCode
        ]));
    }

    /**
     * GenerateRefundPixIn
     * 
     * @param PixRefund $pixRefund
     * @return mixed
     */
    public function generateRefundPixIn(PixRefund $pixRefund)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'GenerateRefundPixIn',
        ], $pixRefund->toArray())));
    }

    /**
     * GetRefundPixInById
     * 
     * @param Account $account
     * @return mixed
     */
    public function getRefundPixInById(Account $account, string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'         => 'GetRefundPixInById',
            'DocumentNumber' => $documentNumber,
        ], $account->toArray() )));
    }

    /**
     * GetRefundPixInByDate
     * 
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param int $pageIndex
     * @param int $pageSize
     * @return mixed
     */
    public function getRefundPixInByDate(string $taxNumber, $startDate = null, $endDate = null, $pageIndex = 0, $pageSize = 10)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'    => 'GetRefundPixInByDate',
            'TaxNumber' => $taxNumber,
            'StartDate' => $startDate,
            'EndDate'   => $endDate,
            'PageSize'  => $pageSize,
            'Index'     => $pageIndex,
        ]));
    }

    /**
     * GetRefundPixOutByDate
     * 
     * @param string $taxNumber
     * @param string $startDate
     * @param string $endDate
     * @param int $pageIndex
     * @param int $pageSize
     * @return mixed
     */
    public function getRefundPixOutByDate(string $taxNumber, $startDate = null, $endDate = null, $pageIndex = 0, $pageSize = 10)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'    => 'GetRefundPixOutByDate',
            'TaxNumber' => $taxNumber,
            'StartDate' => $startDate,
            'EndDate'   => $endDate,
            'PageSize'  => $pageSize,
            'Index'     => $pageIndex,
        ]));
    }

    


}