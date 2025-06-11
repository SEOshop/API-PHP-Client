<?php

namespace Lightspeed;

class ApiResourceVariantsMovements
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
     * @param int $movementId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($movementId = null, $params = array())
    {
        if (!$movementId) {
            return $this->client->read('variants/movements', $params);
        } else {
            return $this->client->read('variants/movements/' . $movementId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($params = array())
    {
        return $this->client->read('variants/movements/count', $params);
    }
}