<?php

namespace Kastanaz\Lararytr\Endpoints;

use Kastanaz\Lararytr\Endpoints\MainEndpoint;

class GetLanguagesEndpoint extends MainEndpoint
{
    /**
     * {@inheritdoc}
     */
    public function request()
    {
        return $this->response($this->client->get('languages'));
    }
}
