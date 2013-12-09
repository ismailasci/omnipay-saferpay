<?php

namespace Asci\Omnipay\SaferPay\Message;

use Omnipay\Common\Message\RedirectResponseInterface;

class AuthorizeResponse extends Response implements RedirectResponseInterface
{
    public function isRedirect()
    {
        return false !== filter_var($this->data, FILTER_VALIDATE_URL);
    }

    public function getRedirectUrl()
    {
        return $this->data;
    }

    public function getMessage()
    {
        return $this->data;
    }
}
