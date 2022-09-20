<?php

namespace Omnipay\WestpacPaywayRest\Message;

/**
 * @link https://www.payway.com.au/rest-docs/index.html#customers
 */
class CreateCustomerRequest extends AbstractRequest
{
    public function getData()
    {
        $this->validate(
            'singleUseTokenId',
        );

        $data = [];

        if ($this->getMerchantId()) {
            $data['merchantId'] = $this->getMerchantId();
        }
        if ($this->getSingleUseTokenId()){
            $data['singleUseTokenId'] = $this->getSingleUseTokenId();
        }
        if ($this->getCustomerIpAddress()){
            $data['customerIpAddress'] = $this->getCustomerIpAddress();
        }

        return $data;
    }

    public function getEndpoint()
    {
        return $this->endpoint . '/customers';
    }

    public function getHttpMethod()
    {
        return 'POST';
    }

    public function getUseSecretKey()
    {
        return true;
    }
}
