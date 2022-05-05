<?php

namespace Lightspeed;

class ApiResourceAccountMetafields
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
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($metafieldId = null, $params = array())
    {
        if (!$metafieldId) {
            return $this->client->read('account/metafields', $params);
        } else {
            return $this->client->read('account/metafields/' . $metafieldId, $params);
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
        return $this->client->read('account/metafields/count', $params);
    }
}