<?php

namespace Lightspeed;

class ApiResourceSubscriptions
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
        $fields = array('subscription' => $fields);

        return $this->client->create('subscriptions', $fields);
    }

    /**
     * @param int $subscriptionId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($subscriptionId = null, $params = array())
    {
        if (!$subscriptionId) {
            return $this->client->read('subscriptions', $params);
        } else {
            return $this->client->read('subscriptions/' . $subscriptionId, $params);
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
        return $this->client->read('subscriptions/count', $params);
    }

    /**
     * @param int $subscriptionId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($subscriptionId, $fields)
    {
        $fields = array('subscription' => $fields);

        return $this->client->update('subscriptions/' . $subscriptionId, $fields);
    }

    /**
     * @param int $subscriptionId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($subscriptionId)
    {
        return $this->client->delete('subscriptions/' . $subscriptionId);
    }
}