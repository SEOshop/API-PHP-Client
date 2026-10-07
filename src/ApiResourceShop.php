<?php

namespace Lightspeed;

class ApiResourceShop
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
        return $this->client->read('shop');
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($fields)
    {
        $fields = array('shop' => $fields);

        return $this->client->update('shop', $fields);
    }
}