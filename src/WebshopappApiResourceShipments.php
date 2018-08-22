<?php



namespace Lightspeed;


class WebshopappApiResourceShipments
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
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shipmentId = null, $params = array())
    {
        if (!$shipmentId)
        {
            return $this->client->read('shipments', $params);
        }
        else
        {
            return $this->client->read('shipments/' . $shipmentId, $params);
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
        return $this->client->read('shipments/count', $params);
    }

    /**
     * @param int $shipmentId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($shipmentId, $fields)
    {
        $fields = array('shipment' => $fields);

        return $this->client->update('shipments/' . $shipmentId, $fields);
    }
}