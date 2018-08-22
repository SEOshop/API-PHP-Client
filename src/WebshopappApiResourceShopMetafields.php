<?php



namespace Lightspeed;


class WebshopappApiResourceShopMetafields
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
        $fields = array('shopMetafield' => $fields);

        return $this->client->create('shop/metafields', $fields);
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
            return $this->client->read('shop/metafields', $params);
        }
        else
        {
            return $this->client->read('shop/metafields/' . $metafieldId, $params);
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
        return $this->client->read('shop/metafields/count', $params);
    }

    /**
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($metafieldId, $fields)
    {
        $fields = array('shopMetafield' => $fields);

        return $this->client->update('shop/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($metafieldId)
    {
        return $this->client->delete('shop/metafields/' . $metafieldId);
    }
}