<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Route;
use Hafael\Fitbank\Models\Account as AccountModel;
use Hafael\Fitbank\Models\BankAccount;
use Hafael\Fitbank\Models\Person;

class Account extends Api
{

    /**
     * GetAccountList
     * 
     * @param int $pageSize
     * @param int $index
     * @return mixed
     */
    public function getAccountList($pageSize = 10, $index = 1)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'   => 'GetAccountList',
            'PageSize' => $pageSize,
            'Index'    => $index,
        ]));
    }

    /**
     * GetAccount
     * 
     * @param string $identifierValue
     * @param string $fieldName TaxNumber or AccountKey
     * @return mixed
     */
    public function getAccount($identifierValue, $fieldName = "TaxNumber")
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'   => 'GetAccount',
            $fieldName => $identifierValue,
        ]));
    }

    /**
     * GetAccountKYC
     * 
     * @param string $identifier
     * @return mixed
     */
    public function getAccountKYC($identifier)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'     => 'GetAccountKYC',
            'Identifier' => $identifier,
        ]));
    }

    /**
     * GetAccountEntry
     * 
     * @param BankAccount $account
     * @param string $startDate
     * @param string $endDate
     * @param boolean $onlyBalance
     * @param string $entryType
     * @return mixed
     */
    public function getAccountEntry(BankAccount $account, $startDate = null, $endDate = null, $onlyBalance = false, $entryType = null)
    {
        if(is_null($startDate)) $startDate = date('Y/m/d');

        if(is_null($endDate)) $endDate = date('Y/m/d');

        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'                  => 'GetAccountEntry',
            'StartDate'               => $startDate,
            'EndDate'                 => $endDate,
            'OnlyBalance'             => !$onlyBalance ? 'false': 'true',
            'EntryClassificationType' => $entryType,
        ], $account->toArray())));
    }

    /**
     * GetAccountEntryPaged
     * 
     * @param BankAccount $account
     * @param string $startDate
     * @param string $endDate
     * @param boolean $onlyBalance
     * @param string $entryType
     * @param int $pageSize
     * @param int $index
     * @return mixed
     */
    public function getAccountEntryPaged(BankAccount $account, $startDate = null, $endDate = null, $onlyBalance = false, $entryType = null, $pageSize = 10, $index = 1)
    {
        if(is_null($startDate)) $startDate = date('Y/m/d');

        if(is_null($endDate)) $endDate = date('Y/m/d');

        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method'                  => 'GetAccountEntryPaged',
            'StartDate'               => $startDate,
            'EndDate'                 => $endDate,
            'OnlyBalance'             => !$onlyBalance ? 'false': 'true',
            'EntryClassificationType' => $entryType,
            'PageSize'                => $pageSize,
            'Index'                   => $index,
        ], $account->toArray())));
    }

    /**
     * NewAccount
     * 
     * @param AccountModel $account
     * @return mixed
     */
    public function newAccount(AccountModel $account)
    {
        return $this->client->post(new Route(), $this->getBody(
            array_merge([
                'Method' => 'NewAccount',
            ], $account->toArray())
        ));
    }

    /**
     * LimitedAccount
     * 
     * @param AccountModel $account
     * @return mixed
     */
    public function newLimitedAccount(AccountModel $account)
    {
        return $this->client->post(new Route(), $this->getBody(
            array_merge([
                'Method' => 'LimitedAccount',
            ], $account->toArray())
        ));
    }

    /**
     * NewAccount
     * 
     * @param AccountModel $account
     * @return mixed
     */
    public function resendDocuments(AccountModel $account)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method' => 'ResendDocuments',
            'TaxNumber' => $account->holder->taxNumber,
            'Documents' => array_map(function($document){return $document->toArray();}, $account->documents),
        ]));
    }

    /**
     * GetDocument
     * 
     * @param string $taxNumber
     * @param int $documentType
     * @return mixed
     */
    public function getDocumentInfo(string $taxNumber, int $documentType)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method' => 'GetDocument',
            'TaxNumber' => $taxNumber,
            'DocumentType' => $documentType,
        ]));
    }

    /**
     * UpdatePersonData
     * 
     * @param Person $person
     * @return mixed
     */
    public function updatePersonData(Person $person)
    {
        return $this->client->post(new Route(), $this->getBody(
            array_merge([
                'Method' => 'UpdatePersonData',
            ], $person->toArray())));
    }

    /**
     * CheckAccountPerson
     * 
     * @param Person $person
     * @return mixed
     */
    public function checkAccountPerson(Person $person)
    {
        return $this->client->post(new Route(), $this->getBody(
            array_merge([
                'Method' => 'CheckAccountPerson',
            ], $person->toArray())));
    }

    /**
     * BlockAccount
     * 
     * @param string $taxNumber
     * @param string $accoutKey
     * @return mixed
     */
    public function blockAccount($taxNumber, $accoutKey)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method' => 'BlockAccount',
            'TaxNumber' => $taxNumber,
            'Accountkey' => $accoutKey,
        ]));
    }

    /**
     * GetAccountOperationLimit
     * 
     * @param AccountModel $account
     * @param int $type
     * @param int $opType
     * @param int $subType
     * @return mixed
     */
    public function getAccountOperationLimit(AccountModel $account, int $type = 0, int $opType = 0, int $subType = 0)
    {
        return $this->client->post(new Route(), $this->getBody(
            array_merge([
                'Method' => 'GetAccountOperationLimit',
                'Type' => $type,
                'OperationType' => $opType,
                'SubType' => $subType,
            ], $account->toArray())));
    }

    /**
     * ChangeAccountOperationLimit
     * 
     * @param AccountModel $account
     * @param int $type
     * @param int $opType
     * @param int $subType
     * @param float $minLimit
     * @param float $maxLimit
     * @return mixed
     */
    public function changeAccountOperationLimit(AccountModel $account, 
                                                int $type = 0, 
                                                int $opType = 0, 
                                                int $subType = 0,
                                                float $minLimit,
                                                float $maxLimit)
    {
        return $this->client->post(new Route(), $this->getBody(
            array_merge([
                'Method' => 'ChangeAccountOperationLimit',
                'Type' => $type,
                'OperationType' => $opType,
                'SubType' => $subType,
                'MinLimitValue' => $minLimit,
                'MaxLimitValue' => $maxLimit,
            ], $account->toArray())));
    }

}