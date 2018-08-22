<?php



namespace Lightspeed;


class WebshopappApiResourceEvents
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
     * @param int $eventId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($eventId = null, $params = array())
    {
        if (!$eventId)
        {
            return $this->client->read('events', $params);
        }
        else
        {
            return $this->client->read('events/' . $eventId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('events/count', $params);
    }

    /**
     * @param int $eventId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($eventId)
    {
        return $this->client->delete('events/' . $eventId);
    }
}