<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\User as UserModel;
use Hafael\Fitbank\Route;

class User extends Api
{

    /**
     * CreateUser
     * 
     * @param UserModel $user
     * @return mixed
     */
    public function createUser(UserModel $user)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => 'CreateUser',
        ], $user->toArray())));
    }

    /**
     * LockUser
     * 
     * @param string $taxNumber
     * @param string $description
     * @return mixed
     */
    public function lockUser($taxNumber, $description)
    {
        return $this->client->post(new Route(), $this->getBody([
            'Method'          => 'LockUser',
            'TaxNumber'       => $taxNumber,
            'LockDescription' => $description,
        ]));
    }

}