<?php



namespace Lightspeed;


class WebshopappApiResourceProducts
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
        $fields = array('product' => $fields);

        return $this->client->create('products', $fields);
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('products', $params);
        }
        else
        {
            return $this->client->read('products/' . $productId, $params);
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
        return $this->client->read('products/count', $params);
    }

    /**
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($productId, $fields)
    {
        $fields = array('product' => $fields);

        return $this->client->update('products/' . $productId, $fields);
    }

    /**
     * @param int $productId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId)
    {
        return $this->client->delete('products/' . $productId);
    }
}