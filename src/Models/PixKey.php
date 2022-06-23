<?php

namespace Hafael\Fitbank\Models;

class PixKey
{

    const TYPE_SOCIAL_SECURITY = 0;
    const TYPE_TAX_NUMBER = 1;
    const TYPE_EMAIL = 2;
    const TYPE_PHONE_NUMBER = 3;
    const TYPE_RANDOM_KEY_CODE = 4;

    const STATUS_CREATED = 0;
    const STATUS_REGISTERING = 1;
    const STATUS_REGISTERED = 2;
    const STATUS_DISABLED = 3;
    const STATUS_CANCELED = 4;
    const STATUS_ERROR = 5;
    //Portability status
    const STATUS_CLAIMING = 6;
    const STATUS_ERROR_OWNERSHIP = 7;
    const STATUS_ERROR_PORTABILITY = 8;

    const ACCOUNT_CHECKING = 0;
    const ACCOUNT_SAVINGS = 1;

    /**
     * @var int
     */
    public $keyType;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $bank;

    /**
     * @var string
     */
    public $bankBranch;

    /**
     * @var string
     */
    public $bankAccount;

    /**
     * @var string
     */
    public $bankAccountDigit;

    /**
     * @var int
     */
    public $accountType;

    /**
     * @var string
     */
    public $confirmationCode;

    /**
     * @var int
     */
    public $confirmation;

    /**
     * @var string
     */
    public $taxNumber;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $reasonType;

    /**
     * @var string
     */
    public $fromBank;

    /**
     * @var string
     */
    public $fromBankBranch;

    /**
     * @var string
     */
    public $fromBankAccount;

    /**
     * @var string
     */
    public $fromBankAccountDigit;

    /**
     * @var string
     */
    public $toBusinessUnitId;

    /**
     * @var string
     */
    public $toBank;

    /**
     * @var string
     */
    public $toBankBranch;

    /**
     * @var string
     */
    public $toBankAccount;

    /**
     * @var string
     */
    public $toBankAccountDigit;
    
    /**
     * Model constructor.
     * 
     * @param array $data
     */
    public function __construct($data = [])
    {
        if(isset($data['keyType'])) {
            $this->keyType($data['keyType']);
        }
        if(isset($data['key'])) {
            $this->key($data['key']);
        }
        if(isset($data['name'])) {
            $this->name($data['name']);
        }
        if(isset($data['bank'])) {
            $this->bank($data['bank']);
        }
        if(isset($data['bankBranch'])) {
            $this->bankBranch($data['bankBranch']);
        }
        if(isset($data['bankAccount'])) {
            $this->bankAccount($data['bankAccount']);
        }
        if(isset($data['bankAccountDigit'])) {
            $this->bankAccountDigit($data['bankAccountDigit']);
        }
        if(isset($data['accountType'])) {
            $this->accountType($data['accountType']);
        }
        if(isset($data['confirmationCode'])) {
            $this->confirmationCode($data['confirmationCode']);
        }
        if(isset($data['confirmation'])) {
            $this->confirmation($data['confirmation']);
        }
        if(isset($data['taxNumber'])) {
            $this->taxNumber($data['taxNumber']);
        }
        if(isset($data['status'])) {
            $this->status($data['status']);
        }
        if(isset($data['reasonType'])) {
            $this->reasonType($data['reasonType']);
        }
        if(isset($data['fromBank'])) {
            $this->fromBank($data['fromBank']);
        }
        if(isset($data['fromBankBranch'])) {
            $this->fromBankBranch($data['fromBankBranch']);
        }
        if(isset($data['fromBankAccount'])) {
            $this->fromBankAccount($data['fromBankAccount']);
        }
        if(isset($data['fromBankAccountDigit'])) {
            $this->fromBankAccountDigit($data['fromBankAccountDigit']);
        }
        if(isset($data['toBusinessUnitId'])) {
            $this->toBusinessUnitId($data['toBusinessUnitId']);
        }
        if(isset($data['toBank'])) {
            $this->toBank($data['toBank']);
        }
        if(isset($data['toBankBranch'])) {
            $this->toBankBranch($data['toBankBranch']);
        }
        if(isset($data['toBankAccount'])) {
            $this->toBankAccount($data['toBankAccount']);
        }
        if(isset($data['toBankAccountDigit'])) {
            $this->toBankAccountDigit($data['toBankAccountDigit']);
        }
    }

    /**
     * @param int $keyType
     */
    public function keyType(int $keyType)
    {
        $this->keyType = $keyType;
        return $this;
    }

    /**
     * @param string $key
     */
    public function key(string $key)
    {
        $this->key = $key;
        return $this;
    }

    /**
     * @param string $name
     */
    public function name(string $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $bank
     */
    public function bank(string $bank)
    {
        $this->bank = $bank;
        return $this;
    }

    /**
     * @param string $bankBranch
     */
    public function bankBranch(string $bankBranch)
    {
        $this->bankBranch = $bankBranch;
        return $this;
    }

    /**
     * @param string $bankAccount
     */
    public function bankAccount(string $bankAccount)
    {
        $this->bankAccount = $bankAccount;
        return $this;
    }

    /**
     * @param string $bankAccountDigit
     */
    public function bankAccountDigit(string $bankAccountDigit)
    {
        $this->bankAccountDigit = $bankAccountDigit;
        return $this;
    }

    /**
     * @param int $accountType
     */
    public function accountType(int $accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * @param string $confirmationCode
     */
    public function confirmationCode(string $confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
        return $this;
    }

    /**
     * @param bool $confirmation
     */
    public function confirmation(bool $confirmation)
    {
        $this->confirmation = $confirmation;
        return $this;
    }

    /**
     * @param string $taxNumber
     */
    public function taxNumber(string $taxNumber)
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * @param int $status
     */
    public function status(int $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @param int $reasonType
     */
    public function reasonType(int $reasonType)
    {
        $this->reasonType = $reasonType;
        return $this;
    }

    /**
     * @param string $fromBank
     */
    public function fromBank(string $fromBank)
    {
        $this->fromBank = $fromBank;
        return $this;
    }

    /**
     * @param string $fromBankBranch
     */
    public function fromBankBranch(string $fromBankBranch)
    {
        $this->fromBankBranch = $fromBankBranch;
        return $this;
    }

    /**
     * @param string $fromBankAccount
     */
    public function fromBankAccount(string $fromBankAccount)
    {
        $this->fromBankAccount = $fromBankAccount;
        return $this;
    }

    /**
     * @param string $fromBankAccountDigit
     */
    public function fromBankAccountDigit(string $fromBankAccountDigit)
    {
        $this->fromBankAccountDigit = $fromBankAccountDigit;
        return $this;
    }

    /**
     * @param string $toBusinessUnitId
     */
    public function toBusinessUnitId(string $toBusinessUnitId)
    {
        $this->toBusinessUnitId = $toBusinessUnitId;
        return $this;
    }

    /**
     * @param string $toBank
     */
    public function toBank(string $toBank)
    {
        $this->toBank = $toBank;
        return $this;
    }

    /**
     * @param string $toBankBranch
     */
    public function toBankBranch(string $toBankBranch)
    {
        $this->toBankBranch = $toBankBranch;
        return $this;
    }

    /**
     * @param string $toBankAccount
     */
    public function toBankAccount(string $toBankAccount)
    {
        $this->toBankAccount = $toBankAccount;
        return $this;
    }

    /**
     * @param string $toBankAccountDigit
     */
    public function toBankAccountDigit(string $toBankAccountDigit)
    {
        $this->toBankAccountDigit = $toBankAccountDigit;
        return $this;
    }

    /**
     * 
     * @return array
     */
    public function toArray()
    {
        return array_filter([
            'PixKey'               => $this->key,
            'PixKeyType'           => $this->keyType,
            'Status'               => $this->status,
            'Bank'                 => $this->bank,
            'BankBranch'           => $this->bankBranch,
            'BankAccount'          => $this->bankAccount,
            'BankAccountDigit'     => $this->bankAccountDigit,
            'AccountType'          => $this->accountType,
            'TaxNumber'            => $this->taxNumber,
            'ConfirmationCode'     => $this->confirmationCode,
            'Confirmation'         => $this->confirmation,
            'ReasonType'           => $this->reasonType,
            'FromBank'             => $this->fromBank,
            'FromBankBranch'       => $this->fromBankBranch,
            'FromBankAccount'      => $this->fromBankAccount,
            'FromBankAccountDigit' => $this->fromBankAccountDigit,
            'ToBusinessUnitId'     => $this->toBusinessUnitId,
            'ToBank'               => $this->toBank,
            'ToBankBranch'         => $this->toBankBranch,
            'ToBankAccount'        => $this->toBankAccount,
            'ToBankAccountDigit'   => $this->toBankAccountDigit,
        ], function($value) {
            return !is_null($value);
        });
    }

    public function toCreatePixKey()
    {
        return array_filter($this->toArray(), function($k) {
            return in_array($k, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
                'Bank',
                'BankBranch',
                'BankAccount',
                'BankAccountDigit'
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toConfirmPixKeyHold()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
                'ConfirmationCode',
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toResendPixKeyToken()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toGetPixKeyStatus()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
                'Bank',
                'BankBranch',
                'BankAccount',
                'BankAccountDigit'
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toClaimPixKey()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toCancelPixKey()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
                'ReasonType',
                'Bank',
                'BankBranch',
                'BankAccount',
                'BankAccountDigit'
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toChangePixKey()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'TaxNumber',
                'FromBank',
                'FromBankBranch',
                'FromBankAccount',
                'FromBankAccountDigit',
                'ToBusinessUnitId',
                'ToBank',
                'ToBankBranch',
                'ToBankAccount',
                'ToBankAccountDigit'
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toCancelPixKeyClaim()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
                'Bank',
                'BankBranch',
                'BankAccount',
                'BankAccountDigit'
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toReplyExternalPixKeyClaim()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'PixKeyType',
                'TaxNumber',
                'Confirmation',
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function toGetInfosPixKey()
    {
        return array_filter($this->toArray(), function($key) {
            return in_array($key, [
                'PixKey',
                'TaxNumber',
            ]);
        }, ARRAY_FILTER_USE_KEY);
    }
}