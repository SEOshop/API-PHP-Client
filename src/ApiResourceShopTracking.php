<?php

namespace Lightspeed;

class ApiResourceShopTracking
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
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($fields)
    {
        $fields = array('shopTracking' => $fields);

        return $this->client->create('shop/tracking', $fields);
    }

    /**
     * @param int $trackingId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($trackingId = null, $params = array())
    {
        if (!$trackingId) {
            return $this->client->read('shop/tracking', $params);
        } else {
            return $this->client->read('shop/tracking/' . $trackingId, $params);
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
        return $this->client->read('shop/tracking/count', $params);
    }

    /**
     * @param int $trackingId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($trackingId, $fields)
    {
        $fields = array('shopTracking' => $fields);

        return $this->client->update('shop/tracking/' . $trackingId, $fields);
    }

    /**
     * @param int $trackingId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($trackingId)
    {
        return $this->client->delete('shop/tracking/' . $trackingId);
    }
}