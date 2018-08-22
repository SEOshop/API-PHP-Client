<?php



namespace Lightspeed;


class WebshopappApiResourceBlogsArticlesTags
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
        $fields = array('blogArticleTag' => $fields);

        return $this->client->create('blogs/articles/tags', $fields);
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
            return $this->client->read('blogs/articles/tags', $params);
        }
        else
        {
            return $this->client->read('blogs/articles/tags/' . $relationId, $params);
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
        return $this->client->read('blogs/articles/tags/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('blogs/articles/tags/' . $relationId);
    }
}