<?php



namespace Lightspeed;


class WebshopappApiResourceVariantsMetafields
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
     * @param int $variantId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($variantId, $fields)
    {
        $fields = array('variantMetafield' => $fields);

        return $this->client->create('variants/' . $variantId . '/metafields', $fields);
    }

    /**
     * @param int $variantId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($variantId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId)
        {
            return $this->client->read('variants/' . $variantId . '/metafields', $params);
        }
        else
        {
            return $this->client->read('variants/' . $variantId . '/metafields/' . $metafieldId, $params);
        }
    }

    /**
     * @param int $variantId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($variantId, $params = array())
    {
        return $this->client->read('variants/' . $variantId . '/metafields/count', $params);
    }

    /**
     * @param int $variantId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($variantId, $metafieldId, $fields)
    {
        $fields = array('variantMetafield' => $fields);

        return $this->client->update('variants/' . $variantId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $variantId
     * @param int $metafieldId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($variantId, $metafieldId)
    {
        return $this->client->delete('variants/' . $variantId . '/metafields/' . $metafieldId);
    }
}