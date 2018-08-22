<?php



namespace Lightspeed;


class WebshopappApiResourceShopJavascript
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
     * @return array
     * @throws WebshopappApiException
     */
    public function get()
    {
        return $this->client->read('shop/javascript');
    }

    /**
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($fields)
    {
        $fields = array('shopJavascript' => $fields);

        return $this->client->update('shop/javascript', $fields);
    }
}
