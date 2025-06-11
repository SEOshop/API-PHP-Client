<?php

namespace Lightspeed;

class ApiResourceCustomersMetafields
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
     * @param int $customerId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($customerId, $fields)
    {
        $fields = array('customerMetafield' => $fields);

        return $this->client->create('customers/' . $customerId . '/metafields', $fields);
    }

    /**
     * @param int $customerId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($customerId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId) {
            return $this->client->read('customers/' . $customerId . '/metafields', $params);
        } else {
            return $this->client->read('customers/' . $customerId . '/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param int $customerId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($customerId, $params = array())
    {
        return $this->client->read('customers/' . $customerId . '/metafields/count', $params);
    }

    /**
     * @param int $customerId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($customerId, $metafieldId, $fields)
    {
        $fields = array('customerMetafield' => $fields);

        return $this->client->update('customers/' . $customerId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $customerId
     * @param int $metafieldId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($customerId, $metafieldId)
    {
        return $this->client->delete('customers/' . $customerId . '/metafields/' . $metafieldId);
    }
}