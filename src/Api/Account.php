<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Route;
use Hafael\Fitbank\Models\Account as AccountModel;

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
     * @param string $taxNumber
     * @return mixed
     */
    public function getAccountEntry($taxNumber, $startDate = null, $endDate = null, $onlyBalance = false)
    {
        if(is_null($startDate)) $startDate = date('Y/m/d');

        if(is_null($endDate)) $endDate = date('Y/m/d');

        return $this->client->post(new Route(), $this->getBody([
            'Method'      => 'GetAccountEntry',
            'TaxNumber'   => $taxNumber,
            'StartDate'   => $startDate,
            'EndDate'     => $endDate,
            'OnlyBalance' => !$onlyBalance ? 'false' : 'true',
        ]));
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

}