<?php



namespace Lightspeed;


class WebshopappApiResourceCategoriesImage
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
     * @param int $categoryId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($categoryId, $fields)
    {
        $fields = array('categoryImage' => $fields);

        return $this->client->create('categories/' . $categoryId . '/image', $fields);
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($categoryId)
    {
        return $this->client->read('categories/' . $categoryId . '/image');
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($categoryId)
    {
        return $this->client->delete('categories/' . $categoryId . '/image');
    }
}