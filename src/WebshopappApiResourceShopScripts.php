<?php



namespace Lightspeed;


class WebshopappApiResourceShopScripts
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
        $fields = array('shopScript' => $fields);

        return $this->client->create('shop/scripts', $fields);
    }

    /**
     * @param int $scriptId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($scriptId = null, $params = array())
    {
        if (!$scriptId)
        {
            return $this->client->read('shop/scripts', $params);
        }
        else
        {
            return $this->client->read('shop/scripts/' . $scriptId, $params);
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
        return $this->client->read('shop/scripts/count', $params);
    }

    /**
     * @param int $scriptId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($scriptId, $fields)
    {
        $fields = array('shopScript' => $fields);

        return $this->client->update('shop/scripts/' . $scriptId, $fields);
    }

    /**
     * @param int $scriptId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($scriptId)
    {
        return $this->client->delete('shop/scripts/' . $scriptId);
    }
}