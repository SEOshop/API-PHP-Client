<?php

namespace Lightspeed;

class ApiResourceDeliverydates
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
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($fields)
    {
        $fields = array('deliverydate' => $fields);

        return $this->client->create('deliverydates', $fields);
    }

    /**
     * @param int $deliverydateId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($deliverydateId = null, $params = array())
    {
        if (!$deliverydateId) {
            return $this->client->read('deliverydates', $params);
        } else {
            return $this->client->read('deliverydates/' . $deliverydateId, $params);
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
        return $this->client->read('deliverydates/count', $params);
    }

    /**
     * @param int $deliverydateId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($deliverydateId, $fields)
    {
        $fields = array('deliverydate' => $fields);

        return $this->client->update('deliverydates/' . $deliverydateId, $fields);
    }

    /**
     * @param int $deliverydateId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($deliverydateId)
    {
        return $this->client->delete('deliverydates/' . $deliverydateId);
    }
}