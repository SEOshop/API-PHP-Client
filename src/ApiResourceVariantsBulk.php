<?php

namespace Lightspeed;

class ApiResourceVariantsBulk
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
    public function update($fields)
    {
        $fields = array('variant' => $fields);

        return $this->client->update('variants/bulk', $fields);
    }
}