<?php

namespace Lightspeed;

class ApiResourceContacts
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
     * @param int $contactId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($contactId = null, $params = array())
    {
        if (!$contactId) {
            return $this->client->read('contacts', $params);
        } else {
            return $this->client->read('contacts/' . $contactId, $params);
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
        return $this->client->read('contacts/count', $params);
    }
}