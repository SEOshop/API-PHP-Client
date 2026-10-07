<?php

namespace Lightspeed;

class ApiResourceProducts
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
        $fields = array('product' => $fields);

        return $this->client->create('products', $fields);
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($productId = null, $params = array())
    {
        if (!$productId) {
            return $this->client->read('products', $params);
        } else {
            return $this->client->read('products/' . $productId, $params);
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
        return $this->client->read('products/count', $params);
    }

    /**
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($productId, $fields)
    {
        $fields = array('product' => $fields);

        return $this->client->update('products/' . $productId, $fields);
    }

    /**
     * @param int $productId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($productId)
    {
        return $this->client->delete('products/' . $productId);
    }
}