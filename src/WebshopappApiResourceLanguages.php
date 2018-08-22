<?php



namespace Lightspeed;


class WebshopappApiResourceLanguages
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
     * @param int $languageId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($languageId = null, $params = array())
    {
        if (!$languageId)
        {
            return $this->client->read('languages', $params);
        }
        else
        {
            return $this->client->read('languages/' . $languageId, $params);
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
        return $this->client->read('languages/count', $params);
    }
}