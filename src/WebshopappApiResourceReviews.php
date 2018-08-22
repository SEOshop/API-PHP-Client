<?php



namespace Lightspeed;


class WebshopappApiResourceReviews
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
        $fields = array('review' => $fields);

        return $this->client->create('reviews', $fields);
    }

    /**
     * @param int $reviewId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($reviewId = null, $params = array())
    {
        if (!$reviewId)
        {
            return $this->client->read('reviews', $params);
        }
        else
        {
            return $this->client->read('reviews/' . $reviewId, $params);
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
        return $this->client->read('reviews/count', $params);
    }

    /**
     * @param int $reviewId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($reviewId, $fields)
    {
        $fields = array('review' => $fields);

        return $this->client->update('reviews/' . $reviewId, $fields);
    }

    /**
     * @param int $reviewId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($reviewId)
    {
        return $this->client->delete('reviews/' . $reviewId);
    }
}