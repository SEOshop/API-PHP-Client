<?php



namespace Lightspeed;


class WebshopappApiResourceMetafields
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
        $fields = array('metafield' => $fields);

        return $this->client->create('metafields', $fields);
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
            return $this->client->read('metafields', $params);
        }
        else
        {
            return $this->client->read('metafields/' . $metafieldId, $params);
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
        return $this->client->read('metafields/count', $params);
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
        $fields = array('metafield' => $fields);

        return $this->client->update('metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($metafieldId)
    {
        return $this->client->delete('metafields/' . $metafieldId);
    }
}