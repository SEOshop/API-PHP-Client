<?php



namespace Lightspeed;


class WebshopappApiResourceTaxesOverrides
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
     * @param int $taxId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($taxId, $fields)
    {
        $fields = array('taxOverride' => $fields);

        return $this->client->create('taxes/' . $taxId . '/overrides', $fields);
    }

    /**
     * @param int $taxId
     * @param int $taxOverrideId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($taxId, $taxOverrideId = null, $params = array())
    {
        if (!$taxOverrideId)
        {
            return $this->client->read('taxes/' . $taxId . '/overrides', $params);
        }
        else
        {
            return $this->client->read('taxes/' . $taxId . '/overrides/' . $taxOverrideId, $params);
        }
    }

    /**
     * @param int $taxId
     * @param array $params
     *
     * @return int
     * @throws WebshopappApiException
     */
    public function count($taxId, $params = array())
    {
        return $this->client->read('taxes/' . $taxId . '/overrides/count', $params);
    }

    /**
     * @param int $taxId
     * @param int $taxOverrideId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($taxId, $taxOverrideId, $fields)
    {
        $fields = array('taxOverride' => $fields);

        return $this->client->update('taxes/' . $taxId . '/overrides/' . $taxOverrideId, $fields);
    }

    /**
     * @param int $taxId
     * @param int $taxOverrideId
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function delete($taxId, $taxOverrideId)
    {
        return $this->client->delete('taxes/' . $taxId . '/overrides/' . $taxOverrideId);
    }
}