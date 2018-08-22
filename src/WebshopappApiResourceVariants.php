<?php



namespace Lightspeed;


class WebshopappApiResourceVariants
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
        $fields = array('variant' => $fields);

        return $this->client->create('variants', $fields);
    }

    /**
     * @param int $variantId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($variantId = null, $params = array())
    {
        if (!$variantId)
        {
            return $this->client->read('variants', $params);
        }
        else
        {
            return $this->client->read('variants/' . $variantId, $params);
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
        return $this->client->read('variants/count', $params);
    }

    /**
     * @param int $variantId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($variantId, $fields)
    {
        $fields = array('variant' => $fields);

        return $this->client->update('variants/' . $variantId, $fields);
    }

    /**
     * @param int $variantId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($variantId)
    {
        return $this->client->delete('variants/' . $variantId);
    }
}