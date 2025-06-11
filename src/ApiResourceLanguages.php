<?php

namespace Lightspeed;

class ApiResourceLanguages
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
     * @param int $languageId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($languageId = null, $params = array())
    {
        if (!$languageId) {
            return $this->client->read('languages', $params);
        } else {
            return $this->client->read('languages/' . $languageId, $params);
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
        return $this->client->read('languages/count', $params);
    }
}