<?php

namespace Adecks\TrafficZA;

use Exception;
use GuzzleHttp\Client;

class Traffic
{

    /** @var string */
    public const URL = 'https://www.i-traffic.co.za/api';

    /**
     * @var array
     */
    const REQUEST_HEADERS = [
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ];

    /**
     * @var string
     */
    protected string $apiKey;

    /**
     * @var string
     */
    protected string $format;

    /**
     * Create a new i-Traffic Http Request Service
     * @param string $apiKey
     * @param string $format
     */
    public function __construct(string $apiKey, string $format = 'json')
    {
        $this->apiKey = $apiKey;
        if (!in_array($format, ['json', 'xml'])) {
            throw new Exception('Only JSON or XML is an accepted format');
        }
        $this->format = $format;
    }

    /**
     * @return string
     */
    public function getApiKey(): string
    {
        return $this->apiKey;
    }

    /**
     * @return string
     */
    public function getResponseFormat(): string
    {
        return $this->format;
    }

    /**
     * Get message signs
     * @see https://www.i-traffic.co.za/developers/help/api/get-api-getmessagesigns_key_format 
     * @return array
     */
    public function getMessageSigns(): array
    {
        try {
            $response = $this->getApiClient()->get('/messagesigns');
            if ($response->getStatusCode() === 200) {
                return array_map(function (array $data) {
                    return new MessageSign($data);
                }, json_decode($response->getBody(), true));
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get Roadways 
     * @see https://www.i-traffic.co.za/developers/help/api/get-api-getroadways_key_format
     * @return array
     */
    public function getRoadways(): array
    {
        try {
            $response = $this->getApiClient()->get('/getroadways');
            if ($response->getStatusCode() === 200) {
                return array_map(function (array $data) {
                    return new Roadway($data);
                }, json_decode($response->getBody(), true));
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get all cameras
     * @see https://www.i-traffic.co.za/developers/help/api/get-api-getcameras_key_format
     * @return array
     */
    public function getCameras(): array
    {
        try {
            $response = $this->getApiClient()->get('/getcameras');
            if ($response->getStatusCode() === 200) {
                return array_map(function (array $data) {
                    return new Camera($data);
                }, json_decode($response->getBody(), true));
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get all alerts
     * @see https://www.i-traffic.co.za/developers/help/api/get-api-getalerts_key_format
     * @return array
     */
    public function getAlerts(): array
    {
        try {
            $response = $this->getApiClient()->get('/getalerts');
            if ($response->getStatusCode() === 200) {
                return array_map(function (array $data) {
                    return new Alert($data);
                }, json_decode($response->getBody(), true));
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get all events
     * @see https://www.i-traffic.co.za/developers/help/api/get-api-getevents_key_format
     * @return array
     */
    public function getEvents(): array
    {
        try {
            /** @var \Psr\Http\Message\ResponseInterface $response  */
            $response = $this->getApiClient()->get("/getevents");

            if ($response->getStatusCode() === 200) {
                return array_map(function (array $event) {
                    return new Event($event);
                }, json_decode($response->getBody(), true));
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Get an api guzzle client
     *
     * @return Client
     */
    protected function getApiClient(): Client
    {
        return new Client([
            'base_uri' => self::URL,
            'headers' => self::REQUEST_HEADERS,
            'query' => [
                'key' => $this->apiKey,
                'format' => $this->format
            ]
        ]);
    }
}
