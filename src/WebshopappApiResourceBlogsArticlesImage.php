<?php



namespace Lightspeed;


class WebshopappApiResourceBlogsArticlesImage
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
     * @param int $articleId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($articleId, $fields)
    {
        $fields = array('blogArticleImage' => $fields);

        return $this->client->create('blogs/articles/' . $articleId . '/image', $fields);
    }

    /**
     * @param int $articleId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($articleId)
    {
        return $this->client->read('blogs/articles/' . $articleId . '/image');
    }

    /**
     * @param int $articleId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($articleId)
    {
        return $this->client->delete('blogs/articles/' . $articleId . '/image');
    }
}