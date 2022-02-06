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
     * Get all events
     * @see https://www.i-traffic.co.za/developers/help/api/get-api-getevents_key_format
     * @return array
     */
    public function getEvents(): array
    {
        try {

            $guzzleClient = new Client([
                'base_uri' => self::URL,
                'headers' => self::REQUEST_HEADERS,
            ]);

            /** @var \Psr\Http\Message\ResponseInterface $response  */
            $response = $guzzleClient->get("/getevents", [
                'query' => [
                    'key' => $this->apiKey,
                    'format' => $this->format
                ]
            ]);

            if ($response->getStatusCode() === 200) {
                return array_map(function (array $event) {
                    return new Event($event);
                }, json_decode($response->getBody(), true));
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
