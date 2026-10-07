<?php

namespace Lightspeed;

class ApiResourceTypes
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
        $fields = array('type' => $fields);

        return $this->client->create('types', $fields);
    }

    /**
     * @param int $typeId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($typeId = null, $params = array())
    {
        if (!$typeId) {
            return $this->client->read('types', $params);
        } else {
            return $this->client->read('types/' . $typeId, $params);
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
        return $this->client->read('types/count', $params);
    }

    /**
     * @param int $typeId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($typeId, $fields)
    {
        $fields = array('type' => $fields);

        return $this->client->update('types/' . $typeId, $fields);
    }

    /**
     * @param int $typeId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($typeId)
    {
        return $this->client->delete('types/' . $typeId);
    }
}