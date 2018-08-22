<?php



namespace Lightspeed;


class WebshopappApiResourceTicketsMessages
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
     * @param int $ticketId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($ticketId, $fields)
    {
        $fields = array('ticketMessage' => $fields);

        return $this->client->create('tickets/' . $ticketId . '/messages', $fields);
    }

    /**
     * @param int $ticketId
     * @param int $messageId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($ticketId, $messageId = null, $params = array())
    {
        if (!$messageId)
        {
            return $this->client->read('tickets/' . $ticketId . '/messages', $params);
        }
        else
        {
            return $this->client->read('tickets/' . $ticketId . '/messages/' . $messageId, $params);
        }
    }

    /**
     * @param int $ticketId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($ticketId, $params = array())
    {
        return $this->client->read('tickets/' . $ticketId . '/messages/count', $params);
    }

    /**
     * @param int $ticketId
     * @param int $messageId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($ticketId, $messageId, $fields)
    {
        $fields = array('ticketMessage' => $fields);

        return $this->client->update('tickets/' . $ticketId . '/messages/' . $messageId, $fields);
    }

    /**
     * @param int $ticketId
     * @param int $messageId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($ticketId, $messageId)
    {
        return $this->client->delete('tickets/' . $ticketId . '/messages/' . $messageId);
    }
}