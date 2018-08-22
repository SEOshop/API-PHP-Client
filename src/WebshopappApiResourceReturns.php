<?php



namespace Lightspeed;


class WebshopappApiResourceReturns
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
        $fields = array('returns' => $fields);

        return $this->client->create('returns', $fields);
    }

    /**
     * @param int $returnId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($returnId = null, $params = array())
    {
        if (!$returnId)
        {
            return $this->client->read('returns', $params);
        }
        else
        {
            return $this->client->read('returns/' . $returnId, $params);
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
        return $this->client->read('returns/count', $params);
    }

    /**
     * @param int $returnId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($returnId, $fields)
    {
        $fields = array('return' => $fields);

        return $this->client->update('returns/' . $returnId, $fields);
    }

    /**
     * @param int $returnId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($returnId)
    {
        return $this->client->delete('returns/' . $returnId);
    }
}