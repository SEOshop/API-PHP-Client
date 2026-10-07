<?php

namespace Lightspeed;

class ApiResourceProductsRelations
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
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($productId, $fields)
    {
        $fields = array('productRelation' => $fields);

        return $this->client->create('products/' . $productId . '/relations', $fields);
    }

    /**
     * @param int $productId
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($productId, $relationId = null, $params = array())
    {
        if (!$relationId) {
            return $this->client->read('products/' . $productId . '/relations', $params);
        } else {
            return $this->client->read('products/' . $productId . '/relations/' . $relationId, $params);
        }
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($productId, $params = array())
    {
        return $this->client->read('products/' . $productId . '/relations/count', $params);
    }

    /**
     * @param int $productId
     * @param int $relationId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($productId, $relationId, $fields)
    {
        $fields = array('productRelation' => $fields);

        return $this->client->update('products/' . $productId . '/relations/' . $relationId, $fields);
    }

    /**
     * @param int $productId
     * @param int $relationId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($productId, $relationId)
    {
        return $this->client->delete('products/' . $productId . '/relations/' . $relationId);
    }
}