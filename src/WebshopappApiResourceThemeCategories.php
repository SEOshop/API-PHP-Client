<?php



namespace Lightspeed;


class WebshopappApiResourceThemeCategories
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
        $fields = array('themeCategory' => $fields);

        return $this->client->create('theme/categories', $fields);
    }

    /**
     * @param int $categoryId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($categoryId = null, $params = array())
    {
        if (!$categoryId)
        {
            return $this->client->read('theme/categories', $params);
        }
        else
        {
            return $this->client->read('theme/categories/' . $categoryId, $params);
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
        return $this->client->read('theme/categories/count', $params);
    }

    /**
     * @param int $categoryId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($categoryId, $fields)
    {
        $fields = array('themeCategory' => $fields);

        return $this->client->update('theme/categories/' . $categoryId, $fields);
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($categoryId)
    {
        return $this->client->delete('theme/categories/' . $categoryId);
    }
}