<?php



namespace Lightspeed;


class WebshopappApiResourceCountries
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
     * @param int $countryId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($countryId = null, $params = array())
    {
        if (!$countryId)
        {
            return $this->client->read('countries', $params);
        }
        else
        {
            return $this->client->read('countries/' . $countryId, $params);
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
        return $this->client->read('countries/count', $params);
    }
}