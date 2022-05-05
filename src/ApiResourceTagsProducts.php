<?php

namespace Lightspeed;

class ApiResourceTagsProducts
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
        $fields = array('tagsProduct' => $fields);

        return $this->client->create('tags/products', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId) {
            return $this->client->read('tags/products', $params);
        } else {
            return $this->client->read('tags/products/' . $relationId, $params);
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
        return $this->client->read('tags/products/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('tags/products/' . $relationId);
    }
}