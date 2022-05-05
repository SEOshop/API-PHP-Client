<?php

namespace Lightspeed;

class ApiResourceEvents
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
            return $this->client->read('events', $params);
        } else {
            return $this->client->read('events/' . $eventId, $params);
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
        return $this->client->read('events/count', $params);
    }

    /**
     * @param int $eventId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($eventId)
    {
        return $this->client->delete('events/' . $eventId);
    }
}