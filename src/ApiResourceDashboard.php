<?php

namespace Lightspeed;

class ApiResourceDashboard
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
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($params = array())
    {
        return $this->client->read('dashboard', $params);
    }
}