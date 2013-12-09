<?php

namespace Asci\Omnipay\SaferPay\Message;

use Omnipay\Common\Message\RequestInterface;
use Omnipay\Common\Message\RedirectResponseInterface;

class CompleteAuthorizeResponse extends Response implements RedirectResponseInterface
{
    protected $isSuccessful = false;

    protected $transactionReference = null;

    protected $token = null;

    public function __construct(RequestInterface $request, $response)
    {
        parent::__construct($request, $response);

        if (preg_match('/^OK:ID=(.*)\&TOKEN=(.*)$/', $this->data, $matches)) {
            $this->isSuccessful = true;
            $this->transactionReference = $matches[1];
            $this->token = $matches[2];
        }
    }

    public function isSuccessful()
    {
        return $this->isSuccessful;
    }

    public function getMessage()
    {
        return $this->data;
    }

    public function getTransactionReference()
    {
        return $this->transactionReference;
    }

    public function getToken()
    {
        return $this->token;
    }
}
