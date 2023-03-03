<?php

namespace Rakhasa\Lararytr\Endpoints;

use Rakhasa\Lararytr\Endpoints\MainEndpoint;

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
