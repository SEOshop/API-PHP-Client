<?php



namespace Lightspeed;


class WebshopappApiResourceProductsImages
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
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($productId, $fields)
    {
        $fields = array('productImage' => $fields);

        return $this->client->create('products/' . $productId . '/images', $fields);
    }

    /**
     * @param int $productId
     * @param int $imageId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($productId, $imageId = null, $params = array())
    {
        if (!$imageId)
        {
            return $this->client->read('products/' . $productId . '/images', $params);
        }
        else
        {
            return $this->client->read('products/' . $productId . '/images/' . $imageId, $params);
        }
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($productId, $params = array())
    {
        return $this->client->read('products/' . $productId . '/images/count', $params);
    }

    /**
     * @param int $productId
     * @param int $imageId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($productId, $imageId, $fields)
    {
        $fields = array('productImage' => $fields);

        return $this->client->update('products/' . $productId . '/images/' . $imageId, $fields);
    }

    /**
     * @param int $productId
     * @param int $imageId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($productId, $imageId)
    {
        return $this->client->delete('products/' . $productId . '/images/' . $imageId);
    }
}