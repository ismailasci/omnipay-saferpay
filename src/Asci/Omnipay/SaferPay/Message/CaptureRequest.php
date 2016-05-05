<?php

namespace Asci\Omnipay\SaferPay\Message;

class CaptureRequest extends AbstractRequest
{
    protected $endpoint = 'PayCompleteV2.asp';

    public function getData()
    {
        $data = array('ACCOUNTID' => $this->getAccountId(), 'ID' => $this->getTransactionReference());

        return $data;
    }

    protected function createResponse($response)
    {
        return $this->response = new CaptureResponse($this, $response);
    }
}
