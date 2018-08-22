<?php



namespace Lightspeed;


class WebshopappApiResourceDiscountrules
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
        $fields = array('discountRule' => $fields);

        return $this->client->create('discountrules', $fields);
    }

    /**
     * @param int $discountruleId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($discountruleId = null, $params = array())
    {
        if (!$discountruleId)
        {
            return $this->client->read('discountrules', $params);
        }
        else
        {
            return $this->client->read('discountrules/' . $discountruleId, $params);
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
        return $this->client->read('discountrules/count', $params);
    }

    /**
     * @param int $discountruleId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($discountruleId, $fields)
    {
        $fields = array('discountRule' => $fields);

        return $this->client->update('discountrules/' . $discountruleId, $fields);
    }

    /**
     * @param int $discountruleId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($discountruleId)
    {
        return $this->client->delete('discountrules/' . $discountruleId);
    }
}