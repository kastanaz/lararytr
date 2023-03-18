<?php

namespace Kastanaz\Lararytr;

use Illuminate\Support\Str;

class Ryte
{
    /**
     * Language ID
     *
     * @var string
     */
    public string $languageId;

    /**
     * Tone ID
     *
     * @var string
     */
    public string $toneId;

    /**
     * Use Case ID
     *
     * @var string
     */
    public string $useCaseId;

    /**
     * Input Contexts
     *
     * @var array
     */
    public array $inputContexts = [];

    /**
     * Variations
     *
     * @var integer
     */
    public int $variations = 1;

    /**
     * Unique User ID
     *
     * @var string
     */
    public string $userId;

    /**
     * Format
     *
     * @var string
     */
    public string $format = 'html';

    /**
     * Creativity Level
     *
     * @var string
     */
    public string $creativityLevel;

    /**
     * Construct
     *
     * @param array $payload
     */
    public function __construct(array $payload = [])
    {
        if (count($payload)) {
            $this->setPayloads($payload);
        }
    }

    /**
     * Set Payloads
     *
     * @param array $payloads
     * @return void
     */
    public function setPayloads(array $payloads): void
    {
        foreach ($payloads as $key => $value) {
            $this->{Str::camel($key)} = $value;
        }
    }
}
