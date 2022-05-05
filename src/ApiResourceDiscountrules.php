<?php

namespace Lightspeed;

class ApiResourceDiscountrules
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
        $fields = array('discountRule' => $fields);

        return $this->client->create('discountrules', $fields);
    }

    /**
     * @param int $discountruleId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($discountruleId = null, $params = array())
    {
        if (!$discountruleId) {
            return $this->client->read('discountrules', $params);
        } else {
            return $this->client->read('discountrules/' . $discountruleId, $params);
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
        return $this->client->read('discountrules/count', $params);
    }

    /**
     * @param int $discountruleId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($discountruleId, $fields)
    {
        $fields = array('discountRule' => $fields);

        return $this->client->update('discountrules/' . $discountruleId, $fields);
    }

    /**
     * @param int $discountruleId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($discountruleId)
    {
        return $this->client->delete('discountrules/' . $discountruleId);
    }
}