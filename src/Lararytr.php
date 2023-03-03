<?php

namespace Rakhasa\Lararytr;

use Rakhasa\Lararytr\Endpoints\GetTonesEndpoint;
use Rakhasa\Lararytr\Endpoints\GetUsageEndpoint;
use Rakhasa\Lararytr\Endpoints\GetUseCaseEndpoint;
use Rakhasa\Lararytr\Endpoints\GetUseCasesEndpoint;
use Rakhasa\Lararytr\Endpoints\GetLanguagesEndpoint;
use Rakhasa\Lararytr\Endpoints\GenerateContentEndpoint;

class Lararytr
{
    /**
     * Client Instance
     *
     * @var Client
     */
    protected Client $client;

    /**
     * Construct
     *
     * @param string $apiKey
     */
    public function __construct(string $apiKey)
    {
        $this->client = new Client($apiKey);
    }

    /**
     * Get Rytr Supported Language
     *
     * @return array
     */
    public function getLanguages(): array
    {
        $endpoint = new GetLanguagesEndpoint($this->client);

        return $endpoint->request();
    }

    /**
     * Get Rytr Tones
     *
     * @return array
     */
    public function getTones()
    {
        $endpoint = new GetTonesEndpoint($this->client);

        return $endpoint->request();
    }

    /**
     * Get Rytr Use Cases
     *
     * @return array
     */
    public function getUseCases(): array
    {
        $endpoint = new GetUseCasesEndpoint($this->client);

        return $endpoint->request();
    }

    /**
     * Get Rytr Use Case Detail
     *
     * @param string $id
     * @return array
     */
    public function getUseCase(string $id): array
    {
        $endpoint = new GetUseCaseEndpoint($this->client, $id);

        return $endpoint->request();
    }

    /**
     * Start Generate Content
     *
     * @param array $payload
     * @return array
     */
    public function generateContent(array $payload): array
    {
        $ryte     = new Ryte($payload);
        $endpoint = new GenerateContentEndpoint($this->client);
        $endpoint->setRyte($ryte);

        return $endpoint->request();
    }

    /**
     * Get Usage
     *
     * @return array
     */
    public function getUsage(): array
    {
        $endpoint = new GetUsageEndpoint($this->client);

        return $endpoint->request();
    }

    // /**
    //  * Create Custom Use Case
    //  *
    //  * @param string $name
    //  * @param string $inputName
    //  * @param string $inputPlaceholder
    //  * @param string $outputExample
    //  * @return array
    //  */
    // public function createCustomUseCase(string $name, string $inputName, string $inputPlaceholder, string $outputExample): array
    // {
    //     return $this->response($this->getHttp()->post('custom-use-cases/create', [
    //         'name' => $name,
    //         'inputName' => $inputName,
    //         'inputPlaceholder' => $inputPlaceholder,
    //         'outputExample' => $outputExample
    //     ]));
    // }
}
