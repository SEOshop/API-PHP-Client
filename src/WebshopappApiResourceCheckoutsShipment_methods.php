<?php



namespace Lightspeed;


class WebshopappApiResourceCheckoutsShipment_methods
{
    /**
     * @var WebshopappApiClient
     */
    private $client;

    public function __construct(WebshopappApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $checkoutId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId, $params = array())
    {
        return $this->client->read('checkouts/' . $checkoutId . '/shipment_methods', $params);
    }
}