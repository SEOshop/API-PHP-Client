<?php

namespace Lightspeed;

class ApiResourceDiscounts
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
        $fields = array('discount' => $fields);

        return $this->client->create('discounts', $fields);
    }

    /**
     * @param int $discountId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($discountId = null, $params = array())
    {
        if (!$discountId) {
            return $this->client->read('discounts', $params);
        } else {
            return $this->client->read('discounts/' . $discountId, $params);
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
        return $this->client->read('discounts/count', $params);
    }

    /**
     * @param int $discountId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($discountId, $fields)
    {
        $fields = array('discount' => $fields);

        return $this->client->update('discounts/' . $discountId, $fields);
    }

    /**
     * @param int $discountId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($discountId)
    {
        return $this->client->delete('discounts/' . $discountId);
    }
}