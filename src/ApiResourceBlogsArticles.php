<?php

namespace Lightspeed;

class ApiResourceBlogsArticles
{
    /**
     * @var ApiClient
     */
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws ApiException
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
     * @throws ApiException
     */
    public function get($articleId = null, $params = array())
    {
        if (!$articleId) {
            return $this->client->read('blogs/articles', $params);
        } else {
            return $this->client->read('blogs/articles/' . $articleId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws ApiException
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
     * @throws ApiException
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
     * @throws ApiException
     */
    public function delete($articleId)
    {
        return $this->client->delete('blogs/articles/' . $articleId);
    }
}