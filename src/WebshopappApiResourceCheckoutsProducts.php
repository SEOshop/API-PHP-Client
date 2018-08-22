<?php



namespace Lightspeed;


class WebshopappApiResourceCheckoutsProducts
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
     * @param int $checkoutId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($checkoutId, $fields)
    {
        return $this->client->create('checkouts/' . $checkoutId . '/products', $fields);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($checkoutId, $productId = null, $params = array())
    {
        if (!$productId)
        {
            return $this->client->read('checkouts/' . $checkoutId . '/products', $params);
        }
        else
        {
            return $this->client->read('checkouts/' . $checkoutId . '/products/' . $productId, $params);
        }
    }

    /**
     * @param int $checkoutId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($checkoutId, $params = array())
    {
        return $this->client->read('checkouts/' . $checkoutId . '/products/count', $params);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($checkoutId, $productId, $fields)
    {
        return $this->client->update('checkouts/' . $checkoutId . '/products/' . $productId, $fields);
    }

    /**
     * @param int $checkoutId
     * @param int $productId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($checkoutId, $productId)
    {
        return $this->client->delete('checkouts/' . $checkoutId . '/products/' . $productId);
    }
}