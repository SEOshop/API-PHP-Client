<?php



namespace Lightspeed;


class WebshopappApiResourceQuotes
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
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('quote' => $fields);

        return $this->client->create('quotes', $fields);
    }

    /**
     * @param int $quoteId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($quoteId = null, $params = array())
    {
        if (!$quoteId)
        {
            return $this->client->read('quotes', $params);
        }
        else
        {
            return $this->client->read('quotes/' . $quoteId, $params);
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
        return $this->client->read('quotes/count', $params);
    }

    /**
     * @param int $quoteId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($quoteId, $fields)
    {
        $fields = array('quote' => $fields);

        return $this->client->update('quotes/' . $quoteId, $fields);
    }
}