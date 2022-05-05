<?php

namespace Lightspeed;

class ApiResourceAdditionalcosts
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
     * @param int $additionalcostId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($additionalcostId = null, $params = array())
    {
        if (!$additionalcostId) {
            return $this->client->read('additionalcosts', $params);
        } else {
            return $this->client->read('additionalcosts/' . $additionalcostId, $params);
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
        return $this->client->read('additionalcosts/count', $params);
    }

    /**
     * @param int $additionalcostId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($additionalcostId, $fields)
    {
        $fields = array('additionalCost' => $fields);

        return $this->client->update('additionalcosts/' . $additionalcostId, $fields);
    }

    /**
     * @param int $additionalcostId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($additionalcostId)
    {
        return $this->client->delete('additionalcosts/' . $additionalcostId);
    }
}