<?php

namespace Asci\Omnipay\SaferPay\Message;

use Omnipay\Common\Message\RedirectResponseInterface;

class CaptureResponse extends Response implements RedirectResponseInterface
{
    public function isSuccessful()
    {
        return $this->data === 'OK';
    }

    public function getMessage()
    {
        return $this->data;
    }
}
