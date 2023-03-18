<?php

namespace Kastanaz\Lararytr\Endpoints;

use Kastanaz\Lararytr\Client;
use Illuminate\Http\Client\Response;
use Kastanaz\Lararytr\Exceptions\RytrRequestException;

abstract class MainEndpoint
{
    /**
     * Http Client Instance
     *
     * @var Client
     */
    protected Client $client;

    /**
     * Construct
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Handle API Response
     *
     * @param Response $response
     * @return array
     */
    protected function response(Response $response): array
    {
        if ($response->failed()) {
            throw new RytrRequestException($response->status());
        }

        return $response->json();
    }

    /**
     * Request API to Rytr
     *
     * @return mixed
     */
    abstract public function request();
}
