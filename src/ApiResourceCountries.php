<?php

namespace Lightspeed;

class ApiResourceCountries
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
     * @param int $countryId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($countryId = null, $params = array())
    {
        if (!$countryId) {
            return $this->client->read('countries', $params);
        } else {
            return $this->client->read('countries/' . $countryId, $params);
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
        return $this->client->read('countries/count', $params);
    }
}