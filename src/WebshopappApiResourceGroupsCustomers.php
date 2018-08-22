<?php



namespace Lightspeed;


class WebshopappApiResourceGroupsCustomers
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
        $fields = array('groupsCustomer' => $fields);

        return $this->client->create('groups/customers', $fields);
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
            return $this->client->read('groups/customers', $params);
        }
        else
        {
            return $this->client->read('groups/customers/' . $relationId, $params);
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
        return $this->client->read('groups/customers/count', $params);
    }

    /**
     * @param int $relationId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($relationId)
    {
        return $this->client->delete('groups/customers/' . $relationId);
    }
}