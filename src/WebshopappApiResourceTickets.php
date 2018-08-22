<?php



namespace Lightspeed;


class WebshopappApiResourceTickets
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
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('ticket' => $fields);

        return $this->client->create('tickets', $fields);
    }

    /**
     * @param int $ticketId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($ticketId = null, $params = array())
    {
        if (!$ticketId)
        {
            return $this->client->read('tickets', $params);
        }
        else
        {
            return $this->client->read('tickets/' . $ticketId, $params);
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
        return $this->client->read('tickets/count', $params);
    }

    /**
     * @param int $ticketId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($ticketId, $fields)
    {
        $fields = array('ticket' => $fields);

        return $this->client->update('tickets/' . $ticketId, $fields);
    }

    /**
     * @param int $ticketId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($ticketId)
    {
        return $this->client->delete('tickets/' . $ticketId);
    }
}