<?php

namespace Kastanaz\Lararytr\Endpoints;

use Kastanaz\Lararytr\Endpoints\MainEndpoint;

class GetUseCasesEndpoint extends MainEndpoint
{
    /**
     * {@inheritdoc}
     */
    public function request()
    {
        return $this->response($this->client->get('use-cases'));
    }
}
