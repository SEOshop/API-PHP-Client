<?php

namespace Lightspeed;

class ApiResourceShipmentsProducts
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
     * @param int $shipmentId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($shipmentId, $productId = null, $params = array())
    {
        if (!$productId) {
            return $this->client->read('shipments/' . $shipmentId . '/products', $params);
        } else {
            return $this->client->read('shipments/' . $shipmentId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $shipmentId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($shipmentId, $params = array())
    {
        return $this->client->read('shipments/' . $shipmentId . '/products/count', $params);
    }
}