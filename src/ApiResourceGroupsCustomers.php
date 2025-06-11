<?php

namespace Lightspeed;

class ApiResourceGroupsCustomers
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
        $fields = array('groupsCustomer' => $fields);

        return $this->client->create('groups/customers', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId) {
            return $this->client->read('groups/customers', $params);
        } else {
            return $this->client->read('groups/customers/' . $relationId, $params);
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
        return $this->client->read('groups/customers/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('groups/customers/' . $relationId);
    }
}