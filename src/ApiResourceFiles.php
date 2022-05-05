<?php

namespace Lightspeed;

class ApiResourceFiles
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
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function create($fields)
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

                return $this->client->create('files', $fields, $options);
            } catch (\RuntimeException $exception) {
                //
            }
        }

        $fields = array('file' => $fields);

        return $this->client->create('files', $fields);
    }

    /**
     * @param int $fileId
     * @param array $params
     *
     * @return array
     * @throws ApiException
     */
    public function get($fileId = null, $params = array())
    {
        if (!$fileId) {
            return $this->client->read('files', $params);
        } else {
            return $this->client->read('files/' . $fileId, $params);
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
        return $this->client->read('files/count', $params);
    }

    /**
     * @param int $fileId
     * @param array $fields
     *
     * @return array
     * @throws ApiException
     */
    public function update($fileId, $fields)
    {
        $fields = array('file' => $fields);

        return $this->client->update('files/' . $fileId, $fields);
    }

    /**
     * @param int $fileId
     *
     * @return array
     * @throws ApiException
     */
    public function delete($fileId)
    {
        return $this->client->delete('files/' . $fileId);
    }
}