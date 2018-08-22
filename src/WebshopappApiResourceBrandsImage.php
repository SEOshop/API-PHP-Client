<?php



namespace Lightspeed;


class WebshopappApiResourceBrandsImage
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
     * @param int $brandId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($brandId, $fields)
    {
        $fields = array('brandImage' => $fields);

        return $this->client->create('brands/' . $brandId . '/image', $fields);
    }

    /**
     * @param int $brandId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($brandId)
    {
        return $this->client->read('brands/' . $brandId . '/image');
    }

    /**
     * @param int $brandId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($brandId)
    {
        return $this->client->delete('brands/' . $brandId . '/image');
    }
}