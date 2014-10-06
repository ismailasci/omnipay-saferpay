<?php

namespace Asci\Omnipay\SaferPay;

use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'SaferPay';
    }

    public function getDefaultParameters()
    {
        return array(
            'testMode' => false,
        );
    }

    public function getAccountId()
    {
        return $this->getParameter('accountId');
    }

    public function setAccountId($value)
    {
        return $this->setParameter('accountId', $value);
    }

    public function getLangId()
    {
        return $this->getParameter('langId');
    }

    public function setLangId($value)
    {
        return $this->setParameter('langId', $value);
    }

    public function getVtConfig()
    {
        return $this->getParameter('vtConfig');
    }

    public function setVtConfig($value)
    {
        return $this->setParameter('vtConfig', $value);
    }

    public function getAutoClose()
    {
        return $this->getParameter('autoClose');
    }

    public function setAutoClose($value)
    {
        return $this->setParameter('autoClose', $value);
    }

    public function getCcName()
    {
        return $this->getParameter('ccName');
    }

    public function setCcName($value)
    {
        return $this->setParameter('ccName', $value);
    }

    public function getShowLanguages()
    {
        return $this->getParameter('showLanguages');
    }

    public function setShowLanguages($value)
    {
        return $this->setParameter('showLanguages', $value);
    }

    public function getPaymentMethods()
    {
        return $this->getParameter('paymentMethods');
    }

    public function setPaymentMethods($value)
    {
        return $this->setParameter('paymentMethods', $value);
    }

    public function getDelivery()
    {
        return $this->getParameter('delivery');
    }

    public function setDelivery($value)
    {
        return $this->setParameter('delivery', $value);
    }

    public function getAppearance()
    {
        return $this->getParameter('appearance');
    }

    public function setAppearance($value)
    {
        return $this->setParameter('appearance', $value);
    }

    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Asci\Omnipay\SaferPay\Message\AuthorizeRequest', $parameters);
    }

    public function completeAuthorize(array $parameters = array())
    {
        return $this->createRequest('\Asci\Omnipay\SaferPay\Message\CompleteAuthorizeRequest', $parameters);
    }

    public function purchase(array $parameters = array())
    {
        return $this->authorize($parameters);
    }

    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Asci\Omnipay\SaferPay\Message\CaptureRequest', $parameters);
    }
}
