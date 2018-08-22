<?php



namespace Lightspeed;


class WebshopappApiResourceCheckouts
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
        return $this->client->create('checkouts', $fields);
    }

    /**
     * @param int $checkoutId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId = null, $params = array())
    {
        if (!$checkoutId)
        {
            return $this->client->read('checkouts', $params);
        }
        else
        {
            return $this->client->read('checkouts/' . $checkoutId, $params);
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
        return $this->client->read('checkouts/count', $params);
    }

    /**
     * @param int $checkoutId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($checkoutId, $fields)
    {
        return $this->client->update('checkouts/' . $checkoutId, $fields);
    }

    /**
     * @param int $checkoutId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($checkoutId)
    {
        return $this->client->delete('checkouts/' . $checkoutId);
    }
}