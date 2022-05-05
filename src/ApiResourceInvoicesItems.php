<?php

namespace Lightspeed;

class ApiResourceInvoicesItems
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
     * @param int $itemId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($invoiceId, $itemId = null, $params = array())
    {
        if (!$itemId) {
            return $this->client->read('invoices/' . $invoiceId . '/items', $params);
        } else {
            return $this->client->read('invoices/' . $invoiceId . '/items/' . $itemId, $params);
        }
    }

    /**
     * @param int $invoiceId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($invoiceId, $params = array())
    {
        return $this->client->read('invoices/' . $invoiceId . '/items/count', $params);
    }
}