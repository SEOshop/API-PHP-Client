<?php

namespace Lightspeed;

class ApiResourceOrdersCredit
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
     * @param int $orderId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($orderId, $fields)
    {
        $fields = array('credit' => $fields);

        return $this->client->create('orders/' . $orderId . '/credit', $fields);
    }
}