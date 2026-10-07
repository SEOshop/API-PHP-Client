<?php

namespace Lightspeed;

class ApiResourceProductsImages
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
     * @param int $productId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($productId, $fields)
    {
        if (strpos($fields['attachment'], 'http') === false) {
            try {
                $attachment = $fields['attachment'];

                new \SplFileObject($attachment);

                $mimetype = mime_content_type($attachment);
                $fields['attachment'] = new \CURLFile($attachment, $mimetype);

                $options = [
                    'header' => 'multipart/form-data'
                ];

                return $this->client->create('products/' . $productId . '/images', $fields, $options);
            } catch (\RuntimeException $exception) {
                //
            }
        }

        $fields = array('productImage' => $fields);

        return $this->client->create('products/' . $productId . '/images', $fields);
    }

    /**
     * @param int $productId
     * @param int $imageId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($productId, $imageId = null, $params = array())
    {
        if (!$imageId) {
            return $this->client->read('products/' . $productId . '/images', $params);
        } else {
            return $this->client->read('products/' . $productId . '/images/' . $imageId, $params);
        }
    }

    /**
     * @param int $productId
     * @param array $params
     *
     * @return int
     * @throws ApiException
     */
    public function count($productId, $params = array())
    {
        return $this->client->read('products/' . $productId . '/images/count', $params);
    }

    /**
     * @param int $productId
     * @param int $imageId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($productId, $imageId, $fields)
    {
        $fields = array('productImage' => $fields);

        return $this->client->update('products/' . $productId . '/images/' . $imageId, $fields);
    }

    /**
     * @param int $productId
     * @param int $imageId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($productId, $imageId)
    {
        return $this->client->delete('products/' . $productId . '/images/' . $imageId);
    }
}