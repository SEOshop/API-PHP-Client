<?php

namespace Lightspeed;

class ApiResourceCheckoutsShipment_methods
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
     * @param int $checkoutId
     *
     * @return array
     * @throws ApiException
     */
    public function get($checkoutId)
    {
        return $this->client->read('checkouts/' . $checkoutId . '/shipment_methods');
    }
}