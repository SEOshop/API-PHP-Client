<?php



namespace Lightspeed;


class WebshopappApiResourceInvoices
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
     * @param int $invoiceId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($invoiceId = null, $params = array())
    {
        if (!$invoiceId)
        {
            return $this->client->read('invoices', $params);
        }
        else
        {
            return $this->client->read('invoices/' . $invoiceId, $params);
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
        return $this->client->read('invoices/count', $params);
    }

    /**
     * @param int $invoiceId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function update($invoiceId, $fields)
    {
        $fields = array('invoice' => $fields);

        return $this->client->update('invoices/' . $invoiceId, $fields);
    }
}