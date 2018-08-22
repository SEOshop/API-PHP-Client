<?php



namespace Lightspeed;


class WebshopappApiResourceFilters
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
        $fields = array('filter' => $fields);

        return $this->client->create('filters', $fields);
    }

    /**
     * @param int $filterId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($filterId = null, $params = array())
    {
        if (!$filterId)
        {
            return $this->client->read('filters', $params);
        }
        else
        {
            return $this->client->read('filters/' . $filterId, $params);
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
        return $this->client->read('filters/count', $params);
    }

    /**
     * @param int $filterId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($filterId, $fields)
    {
        $fields = array('filter' => $fields);

        return $this->client->update('filters/' . $filterId, $fields);
    }

    /**
     * @param int $filterId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($filterId)
    {
        return $this->client->delete('filters/' . $filterId);
    }
}