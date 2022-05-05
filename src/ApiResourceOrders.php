<?php

namespace Lightspeed;

class ApiResourceOrders
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
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($orderId = null, $params = array())
    {
        if (!$orderId) {
            return $this->client->read('orders', $params);
        } else {
            return $this->client->read('orders/' . $orderId, $params);
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
        return $this->client->read('orders/count', $params);
    }

    /**
     * @param int $orderId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($orderId, $fields)
    {
        $fields = array('order' => $fields);

        return $this->client->update('orders/' . $orderId, $fields);
    }
}