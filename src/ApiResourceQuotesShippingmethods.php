<?php

namespace Lightspeed;

class ApiResourceQuotesShippingmethods
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
     *
     * @return array
     * @throws ApiException
     */
    public function get($quoteId)
    {
        return $this->client->read('quotes/' . $quoteId . '/shippingmethods');
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
        return $this->client->read('quotes/' . $quoteId . '/shippingmethods/count', $params);
    }
}