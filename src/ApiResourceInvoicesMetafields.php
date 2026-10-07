<?php

namespace Lightspeed;

class ApiResourceInvoicesMetafields
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
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($invoiceId, $fields)
    {
        $fields = array('invoiceMetafield' => $fields);

        return $this->client->create('invoices/' . $invoiceId . '/metafields', $fields);
    }

    /**
     * @param int $invoiceId
     * @param int $metafieldId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($invoiceId, $metafieldId = null, $params = array())
    {
        if (!$metafieldId) {
            return $this->client->read('invoices/' . $invoiceId . '/metafields', $params);
        } else {
            return $this->client->read('invoices/' . $invoiceId . '/metafields/' . $metafieldId, $params);
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
        return $this->client->read('invoices/' . $invoiceId . '/metafields/count', $params);
    }

    /**
     * @param int $invoiceId
     * @param int $metafieldId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($invoiceId, $metafieldId, $fields)
    {
        $fields = array('invoiceMetafield' => $fields);

        return $this->client->update('invoices/' . $invoiceId . '/metafields/' . $metafieldId, $fields);
    }

    /**
     * @param int $invoiceId
     * @param int $metafieldId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($invoiceId, $metafieldId)
    {
        return $this->client->delete('invoices/' . $invoiceId . '/metafields/' . $metafieldId);
    }
}