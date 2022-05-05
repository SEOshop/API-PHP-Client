<?php

namespace Lightspeed;

class ApiResourceVariants
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
        $fields = array('variant' => $fields);

        return $this->client->create('variants', $fields);
    }

    /**
     * @param int $variantId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($variantId = null, $params = array())
    {
        if (!$variantId) {
            return $this->client->read('variants', $params);
        } else {
            return $this->client->read('variants/' . $variantId, $params);
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
        return $this->client->read('variants/count', $params);
    }

    /**
     * @param int $variantId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($variantId, $fields)
    {
        $fields = array('variant' => $fields);

        return $this->client->update('variants/' . $variantId, $fields);
    }

    /**
     * @param int $variantId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($variantId)
    {
        return $this->client->delete('variants/' . $variantId);
    }
}