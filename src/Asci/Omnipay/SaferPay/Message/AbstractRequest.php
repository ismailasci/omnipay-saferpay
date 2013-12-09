<?php

namespace Asci\Omnipay\SaferPay\Message;

abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $endpoint = 'https://www.saferpay.com/hosting/';

    public function getAccountId()
    {
        return $this->getParameter('accountId');
    }

    public function setAccountId($value)
    {
        return $this->setParameter('accountId', $value);
    }

    public function send()
    {
        $url = $this->getEndpoint().'?'.http_build_query($this->getData());
        $httpResponse = $this->httpClient->get($url)->send();

        return $this->createResponse($httpResponse);
    }

    protected function createResponse($response)
    {
        return $this->response = new Response($this, $response);
    }

    protected function getEndpoint()
    {
        return $this->endpoint;
    }
}
