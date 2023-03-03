<?php

namespace Rakhasa\Lararytr\Endpoints;

use Rakhasa\Lararytr\Endpoints\MainEndpoint;

class GetTonesEndpoint extends MainEndpoint
{
    /**
     * {@inheritdoc}
     */
    public function request()
    {
        return $this->response($this->client->get('tones'));
    }
}
