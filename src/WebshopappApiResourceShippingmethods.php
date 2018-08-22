<?php



namespace Lightspeed;


class WebshopappApiResourceShippingmethods
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
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($shippingmethodId = null, $params = array())
    {
        if (!$shippingmethodId)
        {
            return $this->client->read('shippingmethods', $params);
        }
        else
        {
            return $this->client->read('shippingmethods/' . $shippingmethodId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($params = array())
    {
        return $this->client->read('shippingmethods/count', $params);
    }
}