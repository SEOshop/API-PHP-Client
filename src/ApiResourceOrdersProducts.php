<?php

namespace Lightspeed;

class ApiResourceOrdersProducts
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
     * @param int $orderId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($orderId, $productId = null, $params = array())
    {
        if (!$productId) {
            return $this->client->read('orders/' . $orderId . '/products', $params);
        } else {
            return $this->client->read('orders/' . $orderId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $orderId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($orderId, $params = array())
    {
        return $this->client->read('orders/' . $orderId . '/products/count', $params);
    }
}