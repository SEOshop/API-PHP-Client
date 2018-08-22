<?php



namespace Lightspeed;


class WebshopappApiResourceOrdersProducts
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
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($orderId, $productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('orders/' . $orderId . '/products', $params);
        }
        else
        {
            return $this->client->read('orders/' . $orderId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $orderId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($orderId, $params = array())
    {
        return $this->client->read('orders/' . $orderId . '/products/count', $params);
    }
}