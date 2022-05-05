<?php

namespace Lightspeed;

class ApiResourceShopJavascript
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
        return $this->client->read('shop/javascript');
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($fields)
    {
        $fields = array('shopJavascript' => $fields);

        return $this->client->update('shop/javascript', $fields);
    }
}