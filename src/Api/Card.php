<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\ChangePinCardRequest;
use Hafael\Fitbank\Models\DischargeCardRequest;
use Hafael\Fitbank\Models\PrepaidCardRequest;
use Hafael\Fitbank\Models\RechargeCardRequest;
use Hafael\Fitbank\Models\UnnamedPrepaidCardRequest;
use Hafael\Fitbank\Route;

class Card extends Api
{

    /**
     * RequestCard
     * 
     * @param PrepaidCardRequest $cardRequest
     * @return mixed
     */
    public function requestCard(PrepaidCardRequest $cardRequest)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'RequestCard',
        ], $cardRequest->toArray())));
    }

    /**
     * RequestUnnamedCard
     * 
     * @param UnnamedPrepaidCardRequest $cardRequest
     * @return mixed
     */
    public function requestUnnamedCard(UnnamedPrepaidCardRequest $cardRequest)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'RequestUnnamedCard',
        ], $cardRequest->toArray())));
    }

    /**
     * BindUnnamedCard
     * 
     * @param UnnamedPrepaidCardRequest $cardRequest
     * @return mixed
     */
    public function bindUnnamedCard(UnnamedPrepaidCardRequest $cardRequest)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'BindUnnamedCard',
        ], $cardRequest->toArray())));
    }

    /**
     * GetCardByIdentifierCard
     * 
     * @param string $identifierCard
     * @return mixed
     */
    public function getCardByIdentifierCard($identifierCard)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetCardByIdentifierCard',
            'IdentifierCard' => $identifierCard,
        ]));
    }

    /**
     * RechargeCard
     * 
     * @param RechargeCardRequest $recharge
     * @return mixed
     */
    public function rechargeCard(RechargeCardRequest $recharge)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'RechargeCard',
        ], $recharge->toArray())));
    }

    /**
     * DischargeCard
     * 
     * @param DischargeCardRequest $discharge
     * @return mixed
     */
    public function dischargeCard(DischargeCardRequest $discharge)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'DischargeCard',
        ], $discharge->toArray())));
    }

    /**
     * ChangePinCard
     * 
     * @param ChangePinCardRequest $pinCard
     * @return mixed
     */
    public function changePinCard(ChangePinCardRequest $pinCard)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'ChangePinCard',
        ], $pinCard->toArray())));
    }

    /**
     * ActivateCard
     * 
     * @param string $identifierCard
     * @return mixed
     */
    public function activateCard($identifierCard)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'ActivateCard',
            'IdentifierCard' => $identifierCard,
        ]));
    }

    /**
     * BlockCard
     * 
     * @param string $identifierCard
     * @param int $reasonCode
     * @param string $pinCode
     * @return mixed
     */
    public function blockCard($identifierCard, $reasonCode, $pinCode)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'BlockCard',
            'IdentifierCard' => $identifierCard,
            'Pin'            => $pinCode,
            'ReasonCode'     => $reasonCode,
        ]));
    }

    /**
     * UnblockCard
     * 
     * @param string $identifierCard
     * @param string $pinCode
     * @return mixed
     */
    public function unblockCard($identifierCard, $pinCode)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'UnblockCard',
            'IdentifierCard' => $identifierCard,
            'Pin' => $pinCode,
        ]));
    }

    /**
     * InactivateAndReissueCard
     * 
     * @param string $identifierCard
     * @param int $reasonCode
     * @param string $pinCode
     * @return mixed
     */
    public function inactivateAndReissueCard($identifierCard, $reasonCode, $pinCode)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'InactivateAndReissueCard',
            'IdentifierCard' => $identifierCard,
            'Pin' => $pinCode,
            'ReasonCode' => $reasonCode,
        ]));
    }

    /**
     * GetCardBalance
     * 
     * @param string $identifierCard
     * @param int $usageType
     * @return mixed
     */
    public function getCardBalance($identifierCard, $usageType = 0)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetCardBalance',
            'IdentifierCard' => $identifierCard,
            'UsageType'      => $usageType,
        ]));
    }

    /**
     * GetCardEntry
     * 
     * @param string $identifierCard
     * @param string $initialDate
     * @param string $finalDate
     * @return mixed
     */
    public function getCardEntry($identifierCard, $initialDate, $finalDate)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetCardEntry',
            'IdentifierCard' => $identifierCard,
            'InitialDate'    => $initialDate,
            'FinalDate'      => $finalDate,
        ]));
    }

    /**
     * GetDeniedWithdrawCard
     * 
     * @param string $identifierCard
     * @param string $initialDate
     * @param string $finalDate
     * @return mixed
     */
    public function getDeniedWithdrawCard($identifierCard, $initialDate, $finalDate)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetDeniedWithdrawCard',
            'IdentifierCard' => $identifierCard,
            'InitialDate'    => $initialDate,
            'FinalDate'      => $finalDate,
        ]));
    }

    /**
     * GetCardList
     * 
     * @param string $taxNumber
     * @return mixed
     */
    public function getCardList($taxNumber)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetCardList',
            'TaxNumber' => $taxNumber,
        ]));
    }

    /**
     * GetCardActionStatus
     * 
     * @param string $identifierCard
     * @param string $action
     * @return mixed
     */
    public function getCardActionStatus($identifierCard, $action = 0)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'GetCardActionStatus',
            'IdentifierCard' => $identifierCard,
            'Action'         => $action,
        ]));
    }

    /**
     * ConfirmCardRequest
     * 
     * @param string $identifierCard
     * @return mixed
     */
    public function confirmCardRequest($identifierCard)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'ConfirmCardRequest',
            'IdentifierCard' => $identifierCard,
        ]));
    }

    /**
     * CancelCardRequest
     * 
     * @param string $identifierCard
     * @return mixed
     */
    public function cancelCardRequest($identifierCard)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'CancelCardRequest',
            'IdentifierCard' => $identifierCard,
        ]));
    }

    /**
     * CancelCard
     * 
     * @param string $identifierCard
     * @param string $pinCode
     * @return mixed
     */
    public function cancelCard($identifierCard, $pinCode)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'CancelCard',
            'IdentifierCard' => $identifierCard,
            'Pin'            => $pinCode,
        ]));
    }

    /**
     * ResetPinCard
     * 
     * @param string $identifierCard
     * @return mixed
     */
    public function resetPinCard($identifierCard)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'ResetPinCard',
            'IdentifierCard' => $identifierCard,
        ]));
    }

    /**
     * UpdateCardContactless
     * 
     * @param string $identifierCard
     * @param string $allow
     * @return mixed
     */
    public function updateCardContactless($identifierCard, $allow = true)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'         => 'UpdateCardContactless',
            'IdentifierCard' => $identifierCard,
            'Allow'          => $allow,
        ]));
    }

    /**
     * GetCardBatchById
     * 
     * @param string $batchIdentifier
     * @return mixed
     */
    public function getCardBatchById($batchIdentifier)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'      => 'GetCardBatchById',
            'CardBatchId' => $batchIdentifier,
        ]));
    }

    /**
     * ListCards
     * 
     * @return mixed
     */
    public function listCards()
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method' => 'ListCards',
        ]));
    }

    /**
     * GetCardHolders
     * 
     * @return mixed
     */
    public function getCardHolders()
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method' => 'GetCardHolders',
        ]));
    }
    

}