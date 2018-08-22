<?php



namespace Lightspeed;


class WebshopappApiResourceCheckoutsPayment_methods
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
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId)
    {
        return $this->client->read('checkouts/' . $checkoutId . '/payment_methods');
    }
}