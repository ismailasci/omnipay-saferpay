Saferpay Omnipay gateway
==============

[Saferpay](http://saferpay.com/) gateway for awesome [Omnipay](https://github.com/adrianmacneil/omnipay) library.

[![Build Status](https://travis-ci.org/ismailasci/omnipay-saferpay.png?branch=master)](https://travis-ci.org/ismailasci/omnipay-saferpay)

>> Warning: Only works with omnipay 1.* versions for the moment

#### Installation

To install, simply add it to your composer.json file:

```json
{
    "require": {
        "asci/omnipay-saferpay": "dev-master"
    }
}
```

and run `composer update`

#### Usage

**1. Authorize**

```php
$gateway = new \Asci\Omnipay\SaferPay\Gateway();
$gateway->initialize(array(
    'accountId' => 'your_account_id',
    'testMode' => true,
));

$response = $gateway->authorize(array(
    'amount' => 199.00,
    'description' => 'Google Nexus 4',
))->send();

if ($response->isRedirect()) {
    // redirect to offsite payment gateway
    $response->redirect();
} else {
    // payment failed: display message to customer
    echo $response->getMessage();
}

```

**2. Complete Authorize**

```php
$gateway = new \Asci\Omnipay\SaferPay\Gateway();
$gateway->initialize(array(
    'accountId' => 'your_account_id',
    'testMode' => true,
));

$response = $gateway->completeAuthorize()->send();

if ($response->isSuccessful()) {
    // payment was successful
    print_r($response);
} else {
    // payment failed: display message to customer
    echo $response->getMessage();
}

```

**3. Capture**

```php
$gateway = new \Asci\Omnipay\SaferPay\Gateway();
$gateway->initialize(array(
    'accountId' => 'your_account_id',
    'testMode' => true,
));

$response = $gateway->capture()->send();

if ($response->isSuccessful()) {
    // payment was successful
    print_r($response);
} else {
    // payment failed: display message to customer
    echo $response->getMessage();
}

```
