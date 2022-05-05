<?php

namespace Lightspeed;

class ApiResourceSets
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
        $fields = array('set' => $fields);

        return $this->client->create('sets', $fields);
    }

    /**
     * @param int $setId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($setId = null, $params = array())
    {
        if (!$setId) {
            return $this->client->read('sets', $params);
        } else {
            return $this->client->read('sets/' . $setId, $params);
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
        return $this->client->read('sets/count', $params);
    }

    /**
     * @param int $setId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($setId, $fields)
    {
        $fields = array('set' => $fields);

        return $this->client->update('sets/' . $setId, $fields);
    }

    /**
     * @param int $setId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($setId)
    {
        return $this->client->delete('sets/' . $setId);
    }
}