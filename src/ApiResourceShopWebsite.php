<?php

namespace Lightspeed;

class ApiResourceShopWebsite
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
        return $this->client->read('shop/website');
    }
}