<?php



namespace Lightspeed;


class WebshopappApiResourceRedirects
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
        $fields = array('redirect' => $fields);

        return $this->client->create('redirects', $fields);
    }

    /**
     * @param int $redirectId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($redirectId = null, $params = array())
    {
        if (!$redirectId)
        {
            return $this->client->read('redirects', $params);
        }
        else
        {
            return $this->client->read('redirects/' . $redirectId, $params);
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
        return $this->client->read('redirects/count', $params);
    }

    /**
     * @param int $redirectId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($redirectId, $fields)
    {
        $fields = array('redirect' => $fields);

        return $this->client->update('redirects/' . $redirectId, $fields);
    }

    /**
     * @param int $redirectId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($redirectId)
    {
        return $this->client->delete('redirects/' . $redirectId);
    }
}