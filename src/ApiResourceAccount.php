<?php

namespace Lightspeed;

class ApiResourceAccount
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
     * @return array
     * @throws ApiException
     */
    public function get()
    {
        return $this->client->read('account');
    }
}