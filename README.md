# Fitbank community SDK for PHP

[![Latest Stable Version](http://poser.pugx.org/hafael/fitbank-php-sdk/v)](https://packagist.org/packages/hafael/fitbank-php-sdk)
[![Latest Unstable Version](http://poser.pugx.org/hafael/fitbank-php-sdk/v/unstable)](https://packagist.org/packages/hafael/fitbank-php-sdk)
[![Total Downloads](http://poser.pugx.org/hafael/fitbank-php-sdk/downloads)](https://packagist.org/packages/hafael/fitbank-php-sdk)
[![License](http://poser.pugx.org/hafael/fitbank-php-sdk/license)](https://packagist.org/packages/hafael/fitbank-php-sdk)


## Bank up your business
FitBank provides comprehensive financial service integrations. With a RESTful API platform, FitBank allows businesses to build custom products adapted to customers' needs.

Fully configurable, ideal for instant payments with PIX, boleto collection, utilities and taxes payments, online balance and statement, digital onboarding, and prepaid card in a white-label experience and beyond.

## Why FitBank?
We aspire to speed up the digital transformation of the entire financial ecosystem with scale, performance, and control of high-volume transactions.

This library provides developers with a simple set of bindings to help you integrate Fitbank API to PHP website project.

## Fitbank Dev Portal
Hi, Dev! This page will help you get started with FitBank API.
[https://dev.fitbank.com.br/docs](https://dev.fitbank.com.br/docs)

## 💡 Requirements

PHP 7.3 or higher


## 🧩 Fitbank Collections

| Resource             | Status   |
| -------------------- | :------: |
| Onboarding           | ✅  |
| Account Management   | ✅  |
| Boleto in/out        | ✅  |
| PIX in/out/Dict      | ✅  |
| TED in/out           | ✅  |
| P2P transfers        | ✅  |
| Prepaid cards        | ✅  |
| Top Ups              | ✅  |
| ATM Withdrawals      | ✅  |
| Payments             | ✅  |
| Users                | ✅  |
| EasyCrédito (CaaS)   | 💻  |
| Collection Order     | 💻  |

✅ = All methods available
⌛ = Under development/testing
💻 = Awaiting contributions

## 📦 Installation 

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
        'PARTNER_ID', 
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

    use Hafael\Fitbank\Client;
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
        'personName' => 'Rafael de Marquez Santos',
        'nickname' => 'Rafael',
        'mail' => 'rafaelmail@meuemail.com',
        'phoneNumber' => '219729345534',
        'checkPendingTransfers' => false,
        'publicExposedPerson' => false,
        'birthDate' => '1996/05/20',
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
            'addressLine' => 'Av. Constantino de Barros Filho',
            'addressLine2' => '61',
            'complement' => 'APT 704',
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


## 📜 Other repositories
Repo | Description 
--- | ---
[hafael/php-pix-client](https://github.com/hafael/php-pix-client) | Biblioteca PHP para integração com PSPs no arranjo do PIX
[hafael/azure-mailer-driver](https://github.com/hafael/azure-mailer-driver) | Azure Email Communication Service (ECS) for Laravel
[hafael/php-http-client](https://github.com/hafael/php-http-client) | Http client for building modern APIs or simple 3rd party integrations in PHP
[hafael/laraflake](https://github.com/hafael/laraflake) | LaraFlake generate 64bit unique identifiers for mysql database with horizontal scaling
[hafael/totalvoice-notification-channel](https://github.com/hafael/totalvoice-notification-channel) | TotalVoice notifications channel for Laravel Framework



## 📜 License 

MIT license. Copyright (c) 2023 - [Rafael](https://github.com/hafael) / [Fitbank](https://fitbank.com.br)
For more information, see the [LICENSE](https://github.com/hafael/fitbank-php-sdk/blob/main/LICENSE) file.