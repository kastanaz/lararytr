<?php

namespace Rakhasa\Lararytr\Endpoints;

use Rakhasa\Lararytr\Ryte;
use Rakhasa\Lararytr\Endpoints\MainEndpoint;

class GenerateContentEndpoint extends MainEndpoint
{
    /**
     * Ryte Instance
     *
     * @var Ryte
     */
    protected Ryte $ryte;

    /**
     * Set Ryte
     *
     * @param Ryte $ryte
     * @return self
     */
    public function setRyte(Ryte $ryte): self
    {
        $this->ryte = $ryte;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function request()
    {
        return $this->response($this->client->post('ryte', [
            'languageId' => $this->ryte->languageId,
            'toneId' => $this->ryte->toneId,
            'useCaseId' => $this->ryte->useCaseId,
            'inputContexts' => $this->ryte->inputContexts,
            'variations' => $this->ryte->variations,
            'userId' => $this->ryte->userId,
            'format' => $this->ryte->format,
            'creativityLevel' => $this->ryte->creativityLevel,
        ]));
    }
}
