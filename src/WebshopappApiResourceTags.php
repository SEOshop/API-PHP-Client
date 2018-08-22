<?php



namespace Lightspeed;


class WebshopappApiResourceTags
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
        $fields = array('tag' => $fields);

        return $this->client->create('tags', $fields);
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
            return $this->client->read('tags', $params);
        }
        else
        {
            return $this->client->read('tags/' . $tagId, $params);
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
        return $this->client->read('tags/count', $params);
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
        $fields = array('tag' => $fields);

        return $this->client->update('tags/' . $tagId, $fields);
    }

    /**
     * @param int $tagId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($tagId)
    {
        return $this->client->delete('tags/' . $tagId);
    }
}