<?php



namespace Lightspeed;


class WebshopappApiResourceDashboard
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
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($params = array())
    {
        return $this->client->read('dashboard', $params);
    }
}