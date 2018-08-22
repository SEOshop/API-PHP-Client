<?php



namespace Lightspeed;


class WebshopappApiResourceTagsProducts
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
        $fields = array('tagsProduct' => $fields);

        return $this->client->create('tags/products', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId)
        {
            return $this->client->read('tags/products', $params);
        }
        else
        {
            return $this->client->read('tags/products/' . $relationId, $params);
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
        return $this->client->read('tags/products/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('tags/products/' . $relationId);
    }
}