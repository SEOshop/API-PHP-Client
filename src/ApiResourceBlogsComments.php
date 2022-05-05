<?php

namespace Lightspeed;

class ApiResourceBlogsComments
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
        $fields = array('blogComment' => $fields);

        return $this->client->create('blogs/comments', $fields);
    }

    /**
     * @param int $commentId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($commentId = null, $params = array())
    {
        if (!$commentId) {
            return $this->client->read('blogs/comments', $params);
        } else {
            return $this->client->read('blogs/comments/' . $commentId, $params);
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
        return $this->client->read('blogs/comments/count', $params);
    }

    /**
     * @param int $commentId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($commentId, $fields)
    {
        $fields = array('blogComment' => $fields);

        return $this->client->update('blogs/comments/' . $commentId, $fields);
    }

    /**
     * @param int $commentId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($commentId)
    {
        return $this->client->delete('blogs/comments/' . $commentId);
    }
}