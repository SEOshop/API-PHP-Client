<?php

namespace Lightspeed;

class ApiResourceBlogsArticlesImage
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
     * @param int $articleId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($articleId, $fields)
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

                return $this->client->create('blogs/articles/' . $articleId . '/image', $fields, $options);
            } catch (\RuntimeException $exception) {
                //
            }
        }

        $fields = array('blogArticleImage' => $fields);

        return $this->client->create('blogs/articles/' . $articleId . '/image', $fields);
    }

    /**
     * @param int $articleId
     *
     * @return array
     * @throws ApiException
     */
    public function get($articleId)
    {
        return $this->client->read('blogs/articles/' . $articleId . '/image');
    }

    /**
     * @param int $articleId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($articleId)
    {
        return $this->client->delete('blogs/articles/' . $articleId . '/image');
    }
}