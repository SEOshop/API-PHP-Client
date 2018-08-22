<?php



namespace Lightspeed;


class WebshopappApiResourceGroups
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
        $fields = array('group' => $fields);

        return $this->client->create('groups', $fields);
    }

    /**
     * @param int $groupId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($groupId = null, $params = array())
    {
        if (!$groupId)
        {
            return $this->client->read('groups', $params);
        }
        else
        {
            return $this->client->read('groups/' . $groupId, $params);
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
        return $this->client->read('groups/count', $params);
    }

    /**
     * @param int $groupId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($groupId, $fields)
    {
        $fields = array('group' => $fields);

        return $this->client->update('groups/' . $groupId, $fields);
    }

    /**
     * @param int $groupId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($groupId)
    {
        return $this->client->delete('groups/' . $groupId);
    }
}