<?php



namespace Lightspeed;


class WebshopappApiResourceAccountMetafields
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
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('account/metafields', $params);
        }
        else
        {
            return $this->client->read('account/metafields/' . $metafieldId, $params);
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
        return $this->client->read('account/metafields/count', $params);
    }
}