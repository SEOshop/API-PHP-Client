<?php



namespace Lightspeed;


class WebshopappApiResourceAdditionalcosts
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
     * @param int $additionalcostId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($additionalcostId = null, $params = array())
    {
        if (!$additionalcostId)
        {
            return $this->client->read('additionalcosts', $params);
        }
        else
        {
            return $this->client->read('additionalcosts/' . $additionalcostId, $params);
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
        return $this->client->read('additionalcosts/count', $params);
    }

    /**
     * @param int $additionalcostId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($additionalcostId, $fields)
    {
        $fields = array('additionalCost' => $fields);

        return $this->client->update('additionalcosts/' . $additionalcostId, $fields);
    }

    /**
     * @param int $additionalcostId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($additionalcostId)
    {
        return $this->client->delete('additionalcosts/' . $additionalcostId);
    }
}