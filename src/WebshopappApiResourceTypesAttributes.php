<?php



namespace Lightspeed;


class WebshopappApiResourceTypesAttributes
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
        $fields = array('typesAttribute' => $fields);

        return $this->client->create('types/attributes', $fields);
    }

    /**
     * @param int $relationId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($relationId = null, $params = array())
    {
        if (!$relationId)
        {
            return $this->client->read('types/attributes', $params);
        }
        else
        {
            return $this->client->read('types/attributes/' . $relationId, $params);
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
        return $this->client->read('types/attributes/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('types/attributes/' . $relationId);
    }
}