<?php



namespace Lightspeed;


class WebshopappApiResourceShippingmethodsCountries
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
     * @param int $shippingmethodId
     * @param int $countryId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shippingmethodId, $countryId = null, $params = array())
    {
        if (!$countryId)
        {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries', $params);
        }
        else
        {
            return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries/' . $countryId, $params);
        }
    }

    /**
     * @param int $shippingmethodId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($shippingmethodId, $params = array())
    {
        return $this->client->read('shippingmethods/' . $shippingmethodId . '/countries/count', $params);
    }
}