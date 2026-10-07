<?php

namespace Lightspeed;

class ApiResourceCatalog
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
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($productId = null, $params = array())
    {
        if (!$productId) {
            return $this->client->read('catalog', $params);
        } else {
            return $this->client->read('catalog/' . $productId, $params);
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
        return $this->client->read('catalog/count', $params);
    }
}