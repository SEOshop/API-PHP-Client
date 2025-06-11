<?php

namespace Lightspeed;

class ApiResourceCategoriesImage
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
     * @param int $categoryId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($categoryId, $fields)
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

                return $this->client->create('categories/' . $categoryId . '/image', $fields, $options);
            } catch (\RuntimeException $exception) {
                //
            }
        }

        $fields = array('categoryImage' => $fields);

        return $this->client->create('categories/' . $categoryId . '/image', $fields);
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws ApiException
     */
    public function get($categoryId)
    {
        return $this->client->read('categories/' . $categoryId . '/image');
    }

    /**
     * @param int $categoryId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($categoryId)
    {
        return $this->client->delete('categories/' . $categoryId . '/image');
    }
}