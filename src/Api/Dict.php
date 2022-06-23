<?php

namespace Hafael\Fitbank\Api;

use Hafael\Fitbank\Models\PixKey;
use Hafael\Fitbank\Route;

class Dict extends Api
{

    /**
     * 
     * @param PixKey $pixKey
     * @param string $methodName
     * @return mixed
     */
    private function callApiMethod(PixKey $pixKey, string $methodName)
    {
        return $this->client->post(new Route(), $this->getBody(array_merge([
            'Method' => $methodName,
        ], $pixKey->{'to'.$methodName}() )));
    }

    /**
     * CreatePixKey
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function createPixKey(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'CreatePixKey');
    }

    /**
     * ConfirmPixKeyHold
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function confirmPixKeyHold(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'ConfirmPixKeyHold');
    }

    /**
     * ResendPixKeyToken
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function resendPixKeyToken(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'ResendPixKeyToken');
    }

    /**
     * GetPixKeyStatus
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function getPixKeyStatus(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'GetPixKeyStatus');
    }

    /**
     * GetInfosPixKey
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function getInfosPixKey(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'GetInfosPixKey');
    }

    /**
     * ClaimPixKey
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function claimPixKey(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'ClaimPixKey');
    }

    /**
     * CancelPixKey
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function cancelPixKey(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'CancelPixKey');
    }

    /**
     * ChangePixKey
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function changePixKey(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'ChangePixKey');
    }

    /**
     * CancelPixKeyClaim
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function cancelPixKeyClaim(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'CancelPixKeyClaim');
    }

    /**
     * ReplyExternalPixKeyClaim
     * 
     * @param PixKey $pixKey
     * @return mixed
     */
    public function replyExternalPixKeyClaim(PixKey $pixKey)
    {
        return $this->callApiMethod($pixKey, 'ReplyExternalPixKeyClaim');
    }

}