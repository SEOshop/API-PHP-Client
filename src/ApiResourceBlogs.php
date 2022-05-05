<?php

namespace Lightspeed;

class ApiResourceBlogs
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
        $fields = array('blog' => $fields);

        return $this->client->create('blogs', $fields);
    }

    /**
     * @param int $blogId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($blogId = null, $params = array())
    {
        if (!$blogId) {
            return $this->client->read('blogs', $params);
        } else {
            return $this->client->read('blogs/' . $blogId, $params);
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
        return $this->client->read('blogs/count', $params);
    }

    /**
     * @param int $blogId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($blogId, $fields)
    {
        $fields = array('blog' => $fields);

        return $this->client->update('blogs/' . $blogId, $fields);
    }

    /**
     * @param int $blogId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($blogId)
    {
        return $this->client->delete('blogs/' . $blogId);
    }
}