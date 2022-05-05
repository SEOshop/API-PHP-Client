<?php

namespace Lightspeed;

class ApiResourceShippingmethods
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
     * @param int $shippingmethodId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($shippingmethodId = null, $params = array())
    {
        if (!$shippingmethodId) {
            return $this->client->read('shippingmethods', $params);
        } else {
            return $this->client->read('shippingmethods/' . $shippingmethodId, $params);
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
        return $this->client->read('shippingmethods/count', $params);
    }
}