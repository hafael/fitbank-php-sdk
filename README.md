## Biblioteca PHP para consumir a API da Fitbank

# Mercado Pago SDK for PHP

[![Latest Stable Version](https://poser.pugx.org/hafael/fitbank-php-sdk/v/main)](https://packagist.org/packages/hafael/fitbank-php-sdk)
[![Total Downloads](https://poser.pugx.org/hafael/fitbank-php-sdk/downloads)](https://packagist.org/packages/hafael/fitbank-php-sdk)
[![License](https://poser.pugx.org/hafael/fitbank-php-sdk/license)](https://packagist.org/packages/hafael/fitbank-php-sdk)

This library provides developers with a simple set of bindings to help you integrate Fitbank API to PHP website project.

## 💡 Requirements

PHP 7.3 or higher

## 💻 Installation 

First time using Fitbank? Create your [Fitbank account](https://www.fitbank.com), if you don’t have one already.

1. Download [Composer](https://getcomposer.org/doc/00-intro.md) if not already installed

2. On your project directory run on the command line
`composer require "hafael/fitbank-php-sdk"`

3. Copy the API Key and Secret and replace API_KEY and API_SECRET with it.

That's it! Fitbank PHP SDK has been successfully installed.

## 🌟 Getting Started
  
  Simple usage looks like:
  
```php
  <?php
    require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

    $fitbankClient = new Hafael\Fitbank\Client(
        'API_KEY', 
        'API_SECRET', 
        'PARTNET_ID', 
        'BUSINESS_UNIT_ID',
        'MKTPLACE_ID',
        'TAX_NUMBER', //Account Owner
        'BASE_URL', //Sandbox as default
    );

    //Get created accounts
    $response = $fitbankClient->account()->getAccountList();
    var_dump($response->json());

  ?>
```


Creating new KYC Account

```php
  <?php
    require_once 'vendor/autoload.php';

    use Hafael\Fitbank\Client
    use Hafael\Fitbank\Models\Account;
    use Hafael\Fitbank\Models\Address;
    use Hafael\Fitbank\Models\Document;
    use Hafael\Fitbank\Models\Person;

    ...

    //Create new KYC Account
    
    $holder = new Person([
        'personRoleType' => Person::ROLE_TYPE_HOLDER,
        'taxNumber' => '88494940090',
        'identityDocument' => '269435310',
        'personName' => 'Rafael da Cruz Santos',
        'nickname' => 'Rafael',
        'mail' => 'clientmail@mail.com',
        'phoneNumber' => '219729345534',
        'checkPendingTransfers' => false,
        'publicExposedPerson' => false,
        'birthDate' => '1991/03/20',
        'motherFullName' => 'Daniela Cruz de Marquez',
        'fatherFullName' => 'João Francisco Santos',
        'nationality' => 'Brasileiro',
        'birthCity' => 'Niterói',
        'birthState' => 'Rio de Janeiro',
        'gender' => Person::GENDER_MALE,
        'maritalStatus' => Person::MARITAL_SINGLE,
        'occupation' => 'Empresário',
    ]);

    $documents = [
        Document::fromBase64('dGVzdGU=', Document::FORMAT_JPG)
                ->documentType(Document::TYPE_CNH)
                ->expirationDate('2023/04/15'),
        Document::fromBase64('dGVzdGU=', Document::FORMAT_JPG)
                ->documentType(Document::TYPE_PROOF_ADDRESS),
    ];

    $addresses = [
        new Address([
            'addressType' => Address::RESIDENTIAL,
            'addressLine' => 'Av. Quintino de Bocaiúva',
            'addressLine2' => '61',
            'complement' => 'McDonald`s',
            'zipCode' => '24360-022',
            'neighborhood' => 'São Francisco',
            'cityName' => 'Niterói',
            'state' => 'RJ',
            'country' => 'Brasil',
        ])
    ];

    $account = new Account([
        'holder' => $holder,
        'documents' => $documents,
        'addresses' => $addresses,
    ]);

    $response = $fitbankClient->account->newAccount($account);
    var_dump($response->json());


  ?>
```

## 📚 Documentation 

Visit our Dev Site for further information regarding:
 - Fitbank API Docs: [English](https://dev.fitbank.com.br/docs)


## 🏻 License 

```
MIT license. Copyright (c) 2022 - Hafael / Fitbank
For more information, see the [LICENSE](https://github.com/hafael/fitbank-php-sdk/blob/main/LICENSE) file.
```