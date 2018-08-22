<?php



namespace Lightspeed;


class WebshopappApiResourceVariantsBulk
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
    public function update($fields)
    {
        $fields = array('variant' => $fields);

        return $this->client->update('variants/bulk', $fields);
    }
}