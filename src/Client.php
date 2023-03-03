<?php

namespace Rakhasa\Lararytr;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Traits\ForwardsCalls;

class Client
{
    use ForwardsCalls;

    /**
     * Rytr Host
     *
     * @var string
     */
    protected string $host = 'https://api.rytr.me/v1';

    /**
     * Rytr API Key
     *
     * @var string|null
     */
    protected ?string $apiKey = null;

    /**
     * Http Client Instance
     *
     * @var PendingRequest
     */
    protected PendingRequest $http;

    /**
     * Construct
     *
     * @param string|null $apiKey
     */
    public function __construct(?string $apiKey = null)
    {
        $this->http = Http::acceptJson()->baseUrl($this->host)->withHeaders([
            'Authentication' => 'Bearer ' . $apiKey,
        ]);
    }

    /**
     * Forward a method call to the http object.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     *
     * @throws \BadMethodCallException
     */
    public function __call($method, $parameters)
    {
        return $this->forwardCallTo($this->http, $method, $parameters);
    }
}
