<?php

namespace Asci\Omnipay\SaferPay\Message;

class CaptureRequest extends AbstractRequest
{
    protected $endpoint = 'https://www.saferpay.com/hosting/PayCompleteV2.asp';

    public function getData()
    {
        $data = array('ACCOUNTID' => $this->getAccountId(), 'ID' => $this->getTransactionReference());

        if ($this->getTestMode()) {
            $data['spPassword'] = 'XAjc3Kna';
        }

        return $data;
    }

    protected function createResponse($response)
    {
        return $this->response = new CaptureResponse($this, $response);
    }
}
