<?php



namespace Lightspeed;


class WebshopappApiResourceVariantsMovements
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
     * @param int $movementId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($movementId = null, $params = array())
    {
        if (!$movementId)
        {
            return $this->client->read('variants/movements', $params);
        }
        else
        {
            return $this->client->read('variants/movements/' . $movementId, $params);
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
        return $this->client->read('variants/movements/count', $params);
    }
}