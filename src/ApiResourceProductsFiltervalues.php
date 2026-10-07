<?php

namespace Lightspeed;

class ApiResourceProductsFiltervalues
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
     *
     * @return array
     * @throws ApiException
     */
    public function get($productId)
    {
        return $this->client->read('products/' . $productId . '/filtervalues');
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
        return $this->client->read('products/' . $productId . '/filtervalues/count', $params);
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
        $fields = array('productFiltervalue' => $fields);

        return $this->client->create('products/' . $productId . '/filtervalues', $fields);
    }

    /**
     * @param int $productId
     * @param int $filterValueId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($productId, $filterValueId)
    {
        return $this->client->delete('products/' . $productId . '/filtervalues/' . $filterValueId);
    }
}