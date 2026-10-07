<?php

namespace Lightspeed;

class ApiResourceSuppliers
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
        $fields = array('supplier' => $fields);

        return $this->client->create('suppliers', $fields);
    }

    /**
     * @param int $supplierId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($supplierId = null, $params = array())
    {
        if (!$supplierId) {
            return $this->client->read('suppliers', $params);
        } else {
            return $this->client->read('suppliers/' . $supplierId, $params);
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
        return $this->client->read('suppliers/count', $params);
    }

    /**
     * @param int $supplierId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($supplierId, $fields)
    {
        $fields = array('supplier' => $fields);

        return $this->client->update('suppliers/' . $supplierId, $fields);
    }

    /**
     * @param int $supplierId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($supplierId)
    {
        return $this->client->delete('suppliers/' . $supplierId);
    }
}