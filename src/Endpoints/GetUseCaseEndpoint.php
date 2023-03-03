<?php

namespace Rakhasa\Lararytr\Endpoints;

use Rakhasa\Lararytr\Client;
use Rakhasa\Lararytr\Endpoints\MainEndpoint;

class GetUseCaseEndpoint extends MainEndpoint
{
    /**
     * Use Case ID
     *
     * @var string
     */
    protected string $id;

    /**
     * Construct
     *
     * @param Client $client
     */
    public function __construct(Client $client, string $id)
    {
        $this->client = $client;
        $this->id = $id;
    }

    /**
     * {@inheritdoc}
     */
    public function request()
    {
        return $this->response($this->client->get('use-cases/' . $this->id));
    }
}
