<?php



namespace Lightspeed;


class WebshopappApiResourceCatalog
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
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('catalog', $params);
        }
        else
        {
            return $this->client->read('catalog/' . $productId, $params);
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
        return $this->client->read('catalog/count', $params);
    }
}