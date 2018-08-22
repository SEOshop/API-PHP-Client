<?php



namespace Lightspeed;


class WebshopappApiResourceSuppliers
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
        $fields = array('supplier' => $fields);

        return $this->client->create('suppliers', $fields);
    }

    /**
     * @param int $supplierId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($supplierId = null, $params = array())
    {
        if (!$supplierId)
        {
            return $this->client->read('suppliers', $params);
        }
        else
        {
            return $this->client->read('suppliers/' . $supplierId, $params);
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
        return $this->client->read('suppliers/count', $params);
    }

    /**
     * @param int $supplierId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($supplierId, $fields)
    {
        $fields = array('supplier' => $fields);

        return $this->client->update('suppliers/' . $supplierId, $fields);
    }

    /**
     * @param int $supplierId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($supplierId)
    {
        return $this->client->delete('suppliers/' . $supplierId);
    }
}