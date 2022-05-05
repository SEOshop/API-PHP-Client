<?php

namespace Lightspeed;

class ApiResourceCustomersTokens
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
     * @param int $customerId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($customerId, $fields)
    {
        $fields = array('customerToken' => $fields);

        return $this->client->create('customers/' . $customerId . '/tokens', $fields);
    }
}