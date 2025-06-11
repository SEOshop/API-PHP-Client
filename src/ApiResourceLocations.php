<?php

namespace Lightspeed;

class ApiResourceLocations
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
     * @param int $locationId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($locationId = null, $params = array())
    {
        if (!$locationId) {
            return $this->client->read('locations', $params);
        } else {
            return $this->client->read('locations/' . $locationId, $params);
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
        return $this->client->read('locations/count', $params);
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($fields)
    {
        $fields = array('locations' => $fields);

        return $this->client->create('locations', $fields);
    }

    /**
     * @param int $locationId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($locationId, $fields)
    {
        $fields = array('location' => $fields);

        return $this->client->update('locations/' . $locationId, $fields);
    }

    /**
     * @param int $locationId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($locationId)
    {
        return $this->client->delete('locations/' . $locationId);
    }
}