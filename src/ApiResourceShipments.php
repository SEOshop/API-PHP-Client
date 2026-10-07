<?php

namespace Lightspeed;

class ApiResourceShipments
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
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($shipmentId = null, $params = array())
    {
        if (!$shipmentId) {
            return $this->client->read('shipments', $params);
        } else {
            return $this->client->read('shipments/' . $shipmentId, $params);
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
        return $this->client->read('shipments/count', $params);
    }

    /**
     * @param int $shipmentId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($shipmentId, $fields)
    {
        $fields = array('shipment' => $fields);

        return $this->client->update('shipments/' . $shipmentId, $fields);
    }
}