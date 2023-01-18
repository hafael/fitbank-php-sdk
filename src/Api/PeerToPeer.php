<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\MoneyTransferIn;
use Hafael\Fitbank\Models\MoneyTransferOut;
use Hafael\Fitbank\Models\MoneyTransferP2P;
use Hafael\Fitbank\Models\MoneyTransferQuery;
use Hafael\Fitbank\Models\MultipleP2PTransfer;
use Hafael\Fitbank\Route;

class PeerToPeer extends Api
{

    /**
     * InternalTransfer
     * 
     * @param MoneyTransferP2P $transfer
     * @return mixed
     */
    public function internalTransfer(MoneyTransferP2P $transfer)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'InternalTransfer',
        ], $transfer->toArray())));
    }

    /**
     * MultipleInternalTransfers
     * 
     * @param MultipleP2PTransfer $transfer
     * @return mixed
     */
    public function multipleTransfers(MultipleP2PTransfer $transfer)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'MultipleInternalTransfers',
        ], $transfer->toArray())));
    }

    /**
     * GetInternalTransferById
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function getInternalTransferById(string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetInternalTransferById',
            'DocumentNumber' => $documentNumber,
        ]));
    }

    /**
     * GetInternalTransferByDate
     * 
     * @param string $documentNumber
     * @param string $transferDate
     * @return mixed
     */
    public function getInternalTransferByDate(string $documentNumber, string $transferDate)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method' => 'GetInternalTransferByDate',
            'DocumentNumber' => $documentNumber,
            'TransferDate' => $transferDate,
        ]));
    }

    /**
     * CancelInternalTransfer
     * 
     * @param string $documentNumber
     * @return mixed
     */
    public function cancelInternalTransfer(string $documentNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'CancelInternalTransfer',
            'DocumentNumber' => $documentNumber,
        ]));
    }
    

}