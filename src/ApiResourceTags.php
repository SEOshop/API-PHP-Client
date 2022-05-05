<?php

namespace Lightspeed;

class ApiResourceTags
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
        $fields = array('tag' => $fields);

        return $this->client->create('tags', $fields);
    }

    /**
     * @param int $tagId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($tagId = null, $params = array())
    {
        if (!$tagId) {
            return $this->client->read('tags', $params);
        } else {
            return $this->client->read('tags/' . $tagId, $params);
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
        return $this->client->read('tags/count', $params);
    }

    /**
     * @param int $tagId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($tagId, $fields)
    {
        $fields = array('tag' => $fields);

        return $this->client->update('tags/' . $tagId, $fields);
    }

    /**
     * @param int $tagId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($tagId)
    {
        return $this->client->delete('tags/' . $tagId);
    }
}