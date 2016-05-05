<?php

namespace Asci\Omnipay\SaferPay\Message;

class CaptureRequest extends AbstractRequest
{
    protected $endpoint = 'PayCompleteV2.asp';

    public function getData()
    {
        $data = array('ACCOUNTID' => $this->getAccountId(), 'ID' => $this->getTransactionReference());

        if ($this->getTestMode()) {
            $data['spPassword'] = '8e7Yn5yk';
        }

        return $data;
    }

    protected function createResponse($response)
    {
        return $this->response = new CaptureResponse($this, $response);
    }
}
