<?php

namespace Lightspeed;

class ApiResourceCheckoutsProducts
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
     * @param int $checkoutId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($checkoutId, $fields)
    {
        return $this->client->create('checkouts/' . $checkoutId . '/products', $fields);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($checkoutId, $productId = null, $params = array())
    {
        if (!$productId) {
            return $this->client->read('checkouts/' . $checkoutId . '/products', $params);
        } else {
            return $this->client->read('checkouts/' . $checkoutId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $checkoutId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($checkoutId, $params = array())
    {
        return $this->client->read('checkouts/' . $checkoutId . '/products/count', $params);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($checkoutId, $productId, $fields)
    {
        return $this->client->update('checkouts/' . $checkoutId . '/products/' . $productId, $fields);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($checkoutId, $productId)
    {
        return $this->client->delete('checkouts/' . $checkoutId . '/products/' . $productId);
    }
}