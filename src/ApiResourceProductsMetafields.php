<?php

namespace Lightspeed;

class ApiResourceProductsMetafields
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
        $fields = array('productMetafield' => $fields);

        return $this->client->create('products/' . $productId . '/metafields', $fields);
    }

    /**
     * @param int $productId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($productId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId) {
            return $this->client->read('products/' . $productId . '/metafields', $params);
        } else {
            return $this->client->read('products/' . $productId . '/metafields/' . $metafieldId, $params);
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
        return $this->client->read('products/' . $productId . '/metafields/count', $params);
    }

    /**
     * @param int $productId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($productId, $metafieldId, $fields)
    {
        $fields = array('productMetafield' => $fields);

        return $this->client->update('products/' . $productId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $productId
     * @param int $metafieldId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($productId, $metafieldId)
    {
        return $this->client->delete('products/' . $productId . '/metafields/' . $metafieldId);
    }
}