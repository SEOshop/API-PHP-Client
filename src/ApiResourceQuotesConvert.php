<?php

namespace Lightspeed;

class ApiResourceQuotesConvert
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
        $fields = array('order' => $fields);

        return $this->client->create('quotes/' . $quoteId . '/convert', $fields);
    }
}