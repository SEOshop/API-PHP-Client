<?php

namespace Lightspeed;

class ApiResourceInvoices
{
    /**
     * @var ApiClient
     */
    private $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param int $invoiceId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($invoiceId = null, $params = array())
    {
        if (!$invoiceId) {
            return $this->client->read('invoices', $params);
        } else {
            return $this->client->read('invoices/' . $invoiceId, $params);
        }
    }

    /**
     * @param array $params
     *
     * @return int
     * @throws ApiException
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
     * @throws ApiException
     */
    public function update($invoiceId, $fields)
    {
        $fields = array('invoice' => $fields);

        return $this->client->update('invoices/' . $invoiceId, $fields);
    }
}