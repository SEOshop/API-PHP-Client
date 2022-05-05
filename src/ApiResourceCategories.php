<?php

namespace Lightspeed;

class ApiResourceCategories
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
        $fields = array('category' => $fields);

        return $this->client->create('categories', $fields);
    }

    /**
     * @param int $categoryId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($categoryId = null, $params = array())
    {
        if (!$categoryId) {
            return $this->client->read('categories', $params);
        } else {
            return $this->client->read('categories/' . $categoryId, $params);
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
        return $this->client->read('categories/count', $params);
    }

    /**
     * @param int $categoryId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($categoryId, $fields)
    {
        $fields = array('category' => $fields);

        return $this->client->update('categories/' . $categoryId, $fields);
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($categoryId)
    {
        return $this->client->delete('categories/' . $categoryId);
    }
}