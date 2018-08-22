<?php



namespace Lightspeed;


class WebshopappApiResourceBrands
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
        $fields = array('brand' => $fields);

        return $this->client->create('brands', $fields);
    }

    /**
     * @param int $brandId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($brandId = null, $params = array())
    {
        if (!$brandId)
        {
            return $this->client->read('brands', $params);
        }
        else
        {
            return $this->client->read('brands/' . $brandId, $params);
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
        return $this->client->read('brands/count', $params);
    }

    /**
     * @param int $brandId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($brandId, $fields)
    {
        $fields = array('brand' => $fields);

        return $this->client->update('brands/' . $brandId, $fields);
    }

    /**
     * @param int $brandId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($brandId)
    {
        return $this->client->delete('brands/' . $brandId);
    }
}