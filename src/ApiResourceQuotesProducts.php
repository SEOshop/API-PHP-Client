<?php

namespace Lightspeed;

class ApiResourceQuotesProducts
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
     * @param int $quoteId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($quoteId, $fields)
    {
        $fields = array('quoteProduct' => $fields);

        return $this->client->create('quotes/' . $quoteId . '/products', $fields);
    }

    /**
     * @param int $quoteId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($quoteId, $productId = null, $params = array())
    {
        if (!$productId) {
            return $this->client->read('quotes/' . $quoteId . '/products', $params);
        } else {
            return $this->client->read('quotes/' . $quoteId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $quoteId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($quoteId, $params = array())
    {
        return $this->client->read('quotes/' . $quoteId . '/products/count', $params);
    }

    /**
     * @param int $quoteId
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($quoteId, $productId, $fields)
    {
        $fields = array('quoteProduct' => $fields);

        return $this->client->update('quotes/' . $quoteId . '/products/' . $productId, $fields);
    }

    /**
     * @param int $quoteId
     * @param int $productId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($quoteId, $productId)
    {
        return $this->client->delete('quotes/' . $quoteId . '/products/' . $productId);
    }
}