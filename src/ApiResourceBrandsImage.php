<?php

namespace Lightspeed;

class ApiResourceBrandsImage
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
     * @param int $brandId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($brandId, $fields)
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

                return $this->client->create('brands/' . $brandId . '/image', $fields, $options);
            } catch (\RuntimeException $exception) {
                //
            }
        }

        $fields = array('brandImage' => $fields);

        return $this->client->create('brands/' . $brandId . '/image', $fields);
    }

    /**
     * @param int $brandId
     *
     * @return array
     * @throws ApiException
     */
    public function get($brandId)
    {
        return $this->client->read('brands/' . $brandId . '/image');
    }

    /**
     * @param int $brandId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($brandId)
    {
        return $this->client->delete('brands/' . $brandId . '/image');
    }
}