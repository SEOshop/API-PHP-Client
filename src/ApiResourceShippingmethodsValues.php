<?php

namespace Lightspeed;

class ApiResourceShippingmethodsValues
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
     * @param int $valueId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($shippingmethodId, $valueId = null, $params = array())
    {
        if (!$valueId) {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/values', $params);
        } else {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/values/' . $valueId, $params);
        }
    }

    /**
     * @param int $shippingmethodId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($shippingmethodId, $params = array())
    {
        return $this->client->read('shippingmethods/' . $shippingmethodId . '/values/count', $params);
    }
}