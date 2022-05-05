<?php

namespace Lightspeed;

class ApiResourcePaymentmethods
{
    /**
     * @var ApiClient
     */
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $paymentmethodId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($paymentmethodId = null, $params = array())
    {
        if (!$paymentmethodId) {
            return $this->client->read('paymentmethods', $params);
        } else {
            return $this->client->read('paymentmethods/' . $paymentmethodId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($params = array())
    {
        return $this->client->read('paymentmethods/count', $params);
    }
}