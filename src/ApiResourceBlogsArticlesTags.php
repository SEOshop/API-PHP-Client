<?php

namespace Lightspeed;

class ApiResourceBlogsArticlesTags
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
        $fields = array('blogArticleTag' => $fields);

        return $this->client->create('blogs/articles/tags', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId) {
            return $this->client->read('blogs/articles/tags', $params);
        } else {
            return $this->client->read('blogs/articles/tags/' . $relationId, $params);
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
        return $this->client->read('blogs/articles/tags/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('blogs/articles/tags/' . $relationId);
    }
}