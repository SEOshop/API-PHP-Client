<?php

namespace Lightspeed;

class ApiResourceAttributes
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
        $fields = array('attribute' => $fields);

        return $this->client->create('attributes', $fields);
    }

    /**
     * @param int $attributeId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($attributeId = null, $params = array())
    {
        if (!$attributeId) {
            return $this->client->read('attributes', $params);
        } else {
            return $this->client->read('attributes/' . $attributeId, $params);
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
        return $this->client->read('attributes/count', $params);
    }

    /**
     * @param int $attributeId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($attributeId, $fields)
    {
        $fields = array('attribute' => $fields);

        return $this->client->update('attributes/' . $attributeId, $fields);
    }

    /**
     * @param int $attributeId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($attributeId)
    {
        return $this->client->delete('attributes/' . $attributeId);
    }
}