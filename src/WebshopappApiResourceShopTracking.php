<?php



namespace Lightspeed;


class WebshopappApiResourceShopTracking
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
        $fields = array('shopTracking' => $fields);

        return $this->client->create('shop/tracking', $fields);
    }

    /**
     * @param int $trackingId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($trackingId = null, $params = array())
    {
        if (!$trackingId)
        {
            return $this->client->read('shop/tracking', $params);
        }
        else
        {
            return $this->client->read('shop/tracking/' . $trackingId, $params);
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
        return $this->client->read('shop/tracking/count', $params);
    }

    /**
     * @param int $trackingId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($trackingId, $fields)
    {
        $fields = array('shopTracking' => $fields);

        return $this->client->update('shop/tracking/' . $trackingId, $fields);
    }

    /**
     * @param int $trackingId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($trackingId)
    {
        return $this->client->delete('shop/tracking/' . $trackingId);
    }
}