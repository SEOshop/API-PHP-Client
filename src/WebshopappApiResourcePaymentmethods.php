<?php



namespace Lightspeed;


class WebshopappApiResourcePaymentmethods
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
     * @param int $paymentmethodId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($paymentmethodId = null, $params = array())
    {
        if (!$paymentmethodId)
        {
            return $this->client->read('paymentmethods', $params);
        }
        else
        {
            return $this->client->read('paymentmethods/' . $paymentmethodId, $params);
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
        return $this->client->read('paymentmethods/count', $params);
    }
}