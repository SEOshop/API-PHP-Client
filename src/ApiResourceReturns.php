<?php

namespace Lightspeed;

class ApiResourceReturns
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
     * @param int $returnId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($returnId = null, $params = array())
    {
        if (!$returnId) {
            return $this->client->read('returns', $params);
        } else {
            return $this->client->read('returns/' . $returnId, $params);
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
        return $this->client->read('returns/count', $params);
    }

    /**
     * @param int $returnId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($returnId, $fields)
    {
        $fields = array('return' => $fields);

        return $this->client->update('returns/' . $returnId, $fields);
    }

    /**
     * @param int $returnId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($returnId)
    {
        return $this->client->delete('returns/' . $returnId);
    }
}