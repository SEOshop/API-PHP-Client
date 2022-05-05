<?php

namespace Lightspeed;

class ApiResourceCategoriesProductsBulk
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
        $fields = array('categoriesProduct' => $fields);

        return $this->client->create('categories/products/bulk', $fields);
    }
}