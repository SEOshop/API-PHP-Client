<?php



namespace Lightspeed;


class WebshopappApiResourceOrdersMetafields
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
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($orderId, $fields)
    {
        $fields = array('orderMetafield' => $fields);

        return $this->client->create('orders/' . $orderId . '/metafields', $fields);
    }

    /**
     * @param int $orderId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($orderId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('orders/' . $orderId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('orders/' . $orderId . '/metafields/' . $metafieldId, $params);
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
        return $this->client->read('orders/' . $orderId . '/metafields/count', $params);
    }

    /**
     * @param int $orderId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($orderId, $metafieldId, $fields)
    {
        $fields = array('orderMetafield' => $fields);

        return $this->client->update('orders/' . $orderId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $orderId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($orderId, $metafieldId)
    {
        return $this->client->delete('orders/' . $orderId . '/metafields/' . $metafieldId);
    }
}