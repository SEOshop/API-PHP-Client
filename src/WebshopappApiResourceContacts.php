<?php



namespace Lightspeed;


class WebshopappApiResourceContacts
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
     * @param int $contactId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($contactId = null, $params = array())
    {
        if (!$contactId)
        {
            return $this->client->read('contacts', $params);
        }
        else
        {
            return $this->client->read('contacts/' . $contactId, $params);
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
        return $this->client->read('contacts/count', $params);
    }
}