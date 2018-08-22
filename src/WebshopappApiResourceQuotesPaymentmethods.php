<?php



namespace Lightspeed;


class WebshopappApiResourceQuotesPaymentmethods
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
     * @param int $quoteId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($quoteId)
    {
        return $this->client->read('quotes/' . $quoteId . '/paymentmethods');
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($quoteId, $params = array())
    {
        return $this->client->read('quotes/' . $quoteId . '/paymentmethods/count', $params);
    }
}