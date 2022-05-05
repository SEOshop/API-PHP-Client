<?php

namespace Lightspeed;

class ApiResourceThemeProducts
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
        $fields = array('themeProduct' => $fields);

        return $this->client->create('theme/products', $fields);
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
            return $this->client->read('theme/products', $params);
        } else {
            return $this->client->read('theme/products/' . $productId, $params);
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
        return $this->client->read('theme/products/count', $params);
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
        $fields = array('themeProduct' => $fields);

        return $this->client->update('theme/products/' . $productId, $fields);
    }

    /**
     * @param int $productId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($productId)
    {
        return $this->client->delete('theme/products/' . $productId);
    }
}