<?php

namespace Lightspeed;

class ApiResourceRedirects
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
        $fields = array('redirect' => $fields);

        return $this->client->create('redirects', $fields);
    }

    /**
     * @param int $redirectId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($redirectId = null, $params = array())
    {
        if (!$redirectId) {
            return $this->client->read('redirects', $params);
        } else {
            return $this->client->read('redirects/' . $redirectId, $params);
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
        return $this->client->read('redirects/count', $params);
    }

    /**
     * @param int $redirectId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($redirectId, $fields)
    {
        $fields = array('redirect' => $fields);

        return $this->client->update('redirects/' . $redirectId, $fields);
    }

    /**
     * @param int $redirectId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($redirectId)
    {
        return $this->client->delete('redirects/' . $redirectId);
    }
}