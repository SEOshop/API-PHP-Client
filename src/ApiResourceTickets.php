<?php

namespace Lightspeed;

class ApiResourceTickets
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
     * @param array $fields
     *
     * @return array
     * @throws ApiException
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
     * @throws ApiException
     */
    public function get($ticketId = null, $params = array())
    {
        if (!$ticketId) {
            return $this->client->read('tickets', $params);
        } else {
            return $this->client->read('tickets/' . $ticketId, $params);
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
        return $this->client->read('tickets/count', $params);
    }

    /**
     * @param int $ticketId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
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
     * @throws ApiException
     */
    public function delete($ticketId)
    {
        return $this->client->delete('tickets/' . $ticketId);
    }
}