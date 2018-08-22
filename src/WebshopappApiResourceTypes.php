<?php



namespace Lightspeed;


class WebshopappApiResourceTypes
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
        $fields = array('type' => $fields);

        return $this->client->create('types', $fields);
    }

    /**
     * @param int $typeId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($typeId = null, $params = array())
    {
        if (!$typeId)
        {
            return $this->client->read('types', $params);
        }
        else
        {
            return $this->client->read('types/' . $typeId, $params);
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
        return $this->client->read('types/count', $params);
    }

    /**
     * @param int $typeId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($typeId, $fields)
    {
        $fields = array('type' => $fields);

        return $this->client->update('types/' . $typeId, $fields);
    }

    /**
     * @param int $typeId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($typeId)
    {
        return $this->client->delete('types/' . $typeId);
    }
}