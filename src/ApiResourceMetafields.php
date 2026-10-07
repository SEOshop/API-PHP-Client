<?php

namespace Lightspeed;

class ApiResourceMetafields
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
        $fields = array('metafield' => $fields);

        return $this->client->create('metafields', $fields);
    }

    /**
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($metafieldId = null, $params = array())
    {
        if (!$metafieldId) {
            return $this->client->read('metafields', $params);
        } else {
            return $this->client->read('metafields/' . $metafieldId, $params);
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
        return $this->client->read('metafields/count', $params);
    }

    /**
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($metafieldId, $fields)
    {
        $fields = array('metafield' => $fields);

        return $this->client->update('metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $metafieldId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($metafieldId)
    {
        return $this->client->delete('metafields/' . $metafieldId);
    }
}