<?php

namespace Lightspeed;

class ApiResourceShippingmethodsCountries
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
     * @param int $countryId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($shippingmethodId, $countryId = null, $params = array())
    {
        if (!$countryId) {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries', $params);
        } else {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries/' . $countryId, $params);
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
        return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries/count', $params);
    }
}