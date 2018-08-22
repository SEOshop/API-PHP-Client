<?php

namespace Lightspeed;


class WebshopappApiResourceAccount
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('account');
    }
}