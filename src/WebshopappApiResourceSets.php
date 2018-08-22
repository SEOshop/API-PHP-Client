<?php



namespace Lightspeed;


class WebshopappApiResourceSets
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
        $fields = array('set' => $fields);

        return $this->client->create('sets', $fields);
    }

    /**
     * @param int $setId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($setId = null, $params = array())
    {
        if (!$setId)
        {
            return $this->client->read('sets', $params);
        }
        else
        {
            return $this->client->read('sets/' . $setId, $params);
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
        return $this->client->read('sets/count', $params);
    }

    /**
     * @param int $setId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($setId, $fields)
    {
        $fields = array('set' => $fields);

        return $this->client->update('sets/' . $setId, $fields);
    }

    /**
     * @param int $setId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($setId)
    {
        return $this->client->delete('sets/' . $setId);
    }
}