<?php

namespace Lightspeed;

class ApiResourceOrdersCustomstatuses
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
        $fields = array('customStatus' => $fields);

        return $this->client->create('orders/customstatuses', $fields);
    }

    /**
     * @param int $customstatusId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($customstatusId = null, $params = array())
    {
        if (!$customstatusId) {
            return $this->client->read('orders/customstatuses', $params);
        } else {
            return $this->client->read('orders/customstatuses/' . $customstatusId, $params);
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
        return $this->client->read('orders/customstatuses/count', $params);
    }

    /**
     * @param int $customstatusId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($customstatusId, $fields)
    {
        $fields = array('customStatus' => $fields);

        return $this->client->update('orders/customstatuses/' . $customstatusId, $fields);
    }

    /**
     * @param int $customstatusId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($customstatusId)
    {
        return $this->client->delete('orders/customstatuses/' . $customstatusId);
    }
}