<?php

namespace Lightspeed;

class ApiResourceExternal_services
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
        $fields = array('externalService' => $fields);

        return $this->client->create('external_services', $fields);
    }

    /**
     * @param int $externalserviceId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($externalserviceId = null, $params = array())
    {
        if (!$externalserviceId) {
            return $this->client->read('external_services', $params);
        } else {
            return $this->client->read('external_services/' . $externalserviceId, $params);
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
        return $this->client->read('external_services/count', $params);
    }

    /**
     * @param int $externalserviceId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($externalserviceId)
    {
        return $this->client->delete('external_services/' . $externalserviceId);
    }
}