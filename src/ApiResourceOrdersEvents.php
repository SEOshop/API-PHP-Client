<?php

namespace Lightspeed;

class ApiResourceOrdersEvents
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
     * @param int $eventId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($eventId = null, $params = array())
    {
        if (!$eventId) {
            return $this->client->read('orders/events', $params);
        } else {
            return $this->client->read('orders/events/' . $eventId, $params);
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
        return $this->client->read('orders/events/count', $params);
    }
}