<?php



namespace Lightspeed;


class WebshopappApiResourceCustomersTokens
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
     * @param int $customerId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($customerId, $fields)
    {
        $fields = array('customerToken' => $fields);

        return $this->client->create('customers/' . $customerId . '/tokens', $fields);
    }
}