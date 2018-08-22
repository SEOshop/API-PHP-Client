<?php



namespace Lightspeed;


class WebshopappApiResourceShipmentsProducts
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
     * @param int $shipmentId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shipmentId, $productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('shipments/' . $shipmentId . '/products', $params);
        }
        else
        {
            return $this->client->read('shipments/' . $shipmentId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $shipmentId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($shipmentId, $params = array())
    {
        return $this->client->read('shipments/' . $shipmentId . '/products/count', $params);
    }
}