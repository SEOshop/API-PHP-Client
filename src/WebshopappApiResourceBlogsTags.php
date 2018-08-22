<?php



namespace Lightspeed;


class WebshopappApiResourceBlogsTags
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
        $fields = array('blogTag' => $fields);

        return $this->client->create('blogs/tags', $fields);
    }

    /**
     * @param int $tagId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($tagId = null, $params = array())
    {
        if (!$tagId)
        {
            return $this->client->read('blogs/tags', $params);
        }
        else
        {
            return $this->client->read('blogs/tags/' . $tagId, $params);
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
        return $this->client->read('blogs/tags/count', $params);
    }

    /**
     * @param int $tagId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($tagId, $fields)
    {
        $fields = array('blogTag' => $fields);

        return $this->client->update('blogs/tags/' . $tagId, $fields);
    }

    /**
     * @param int $tagId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($tagId)
    {
        return $this->client->delete('blogs/tags/' . $tagId);
    }
}