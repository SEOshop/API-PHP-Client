<?php



namespace Lightspeed;


class WebshopappApiResourceBlogsArticles
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
        $fields = array('blogArticle' => $fields);

        return $this->client->create('blogs/articles', $fields);
    }

    /**
     * @param int $articleId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($articleId = null, $params = array())
    {
        if (!$articleId)
        {
            return $this->client->read('blogs/articles', $params);
        }
        else
        {
            return $this->client->read('blogs/articles/' . $articleId, $params);
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
        return $this->client->read('blogs/articles/count', $params);
    }

    /**
     * @param int $articleId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($articleId, $fields)
    {
        $fields = array('blogArticle' => $fields);

        return $this->client->update('blogs/articles/' . $articleId, $fields);
    }

    /**
     * @param int $articleId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($articleId)
    {
        return $this->client->delete('blogs/articles/' . $articleId);
    }
}