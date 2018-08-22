<?php



namespace Lightspeed;


class WebshopappApiResourceOrders
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $orderId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($orderId = null, $params = array())
    {
        if (!$orderId)
        {
            return $this->client->read('orders', $params);
        }
        else
        {
            return $this->client->read('orders/' . $orderId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
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
     * @throws WebshopappApiException
     */
    public function update($orderId, $fields)
    {
        $fields = array('order' => $fields);

        return $this->client->update('orders/' . $orderId, $fields);
    }
}