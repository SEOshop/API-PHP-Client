<?php



namespace Lightspeed;


class WebshopappApiResourceCustomersLogin
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
        $fields = array('customerLogin' => $fields);

        return $this->client->create('customers/' . $customerId . '/login', $fields);
    }
}