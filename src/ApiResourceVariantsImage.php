<?php

namespace Lightspeed;

class ApiResourceVariantsImage
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
     * @param int $variantId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($variantId, $fields)
    {
        $fields = array('variantImage' => $fields);

        return $this->client->create('variants/' . $variantId . '/image', $fields);
    }

    /**
     * @param int $variantId
     *
     * @return array
     * @throws ApiException
     */
    public function get($variantId)
    {
        return $this->client->read('variants/' . $variantId . '/image');
    }

    /**
     * @param int $variantId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($variantId)
    {
        return $this->client->delete('variants/' . $variantId . '/image');
    }
}