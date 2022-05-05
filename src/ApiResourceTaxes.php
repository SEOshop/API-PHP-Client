<?php

namespace Lightspeed;

class ApiResourceTaxes
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
        $fields = array('tax' => $fields);

        return $this->client->create('taxes', $fields);
    }

    /**
     * @param int $taxId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($taxId = null, $params = array())
    {
        if (!$taxId) {
            return $this->client->read('taxes', $params);
        } else {
            return $this->client->read('taxes/' . $taxId, $params);
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
        return $this->client->read('taxes/count', $params);
    }

    /**
     * @param int $taxId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($taxId, $fields)
    {
        $fields = array('tax' => $fields);

        return $this->client->update('taxes/' . $taxId, $fields);
    }

    /**
     * @param int $taxId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($taxId)
    {
        return $this->client->delete('taxes/' . $taxId);
    }
}