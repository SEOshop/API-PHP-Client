<?php



namespace Lightspeed;


class WebshopappApiResourceShipmentsMetafields
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
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($shipmentId, $fields)
    {
        $fields = array('shipmentMetafield' => $fields);

        return $this->client->create('shipments/' . $shipmentId . '/metafields', $fields);
    }

    /**
     * @param int $shipmentId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shipmentId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('shipments/' . $shipmentId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('shipments/' . $shipmentId . '/metafields/' . $metafieldId, $params);
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
        return $this->client->read('shipments/' . $shipmentId . '/metafields/count', $params);
    }

    /**
     * @param int $shipmentId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($shipmentId, $metafieldId, $fields)
    {
        $fields = array('shipmentMetafield' => $fields);

        return $this->client->update('shipments/' . $shipmentId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $shipmentId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($shipmentId, $metafieldId)
    {
        return $this->client->delete('shipments/' . $shipmentId . '/metafields/' . $metafieldId);
    }
}