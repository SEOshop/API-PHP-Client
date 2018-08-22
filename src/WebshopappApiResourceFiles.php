<?php



namespace Lightspeed;


class WebshopappApiResourceFiles
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
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function create($fields)
    {
        $fields = array('file' => $fields);

        return $this->client->create('files', $fields);
    }

    /**
     * @param int $fileId
     * @param array $params
     *
     * @return array
     * @throws WebshopappApiException
     */
    public function get($fileId = null, $params = array())
    {
        if (!$fileId)
        {
            return $this->client->read('files', $params);
        }
        else
        {
            return $this->client->read('files/' . $fileId, $params);
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
        return $this->client->read('files/count', $params);
    }

    /**
     * @param int $fileId
     * @param array $fields
     *
     * @return array
     * @throws WebshopappApiException
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
     * @throws WebshopappApiException
     */
    public function delete($fileId)
    {
        return $this->client->delete('files/' . $fileId);
    }
}