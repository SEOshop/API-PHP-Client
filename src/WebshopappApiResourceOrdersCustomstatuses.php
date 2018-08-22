<?php



namespace Lightspeed;


class WebshopappApiResourceOrdersCustomstatuses
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
        $fields = array('customStatus' => $fields);

        return $this->client->create('orders/customstatuses', $fields);
    }

    /**
     * @param int $customstatusId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($customstatusId = null, $params = array())
    {
        if (!$customstatusId)
        {
            return $this->client->read('orders/customstatuses', $params);
        }
        else
        {
            return $this->client->read('orders/customstatuses/' . $customstatusId, $params);
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
        return $this->client->read('orders/customstatuses/count', $params);
    }

    /**
     * @param int $customstatusId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($customstatusId, $fields)
    {
        $fields = array('customStatus' => $fields);

        return $this->client->update('orders/customstatuses/' . $customstatusId, $fields);
    }

    /**
     * @param int $customstatusId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($customstatusId)
    {
        return $this->client->delete('orders/customstatuses/' . $customstatusId);
    }
}