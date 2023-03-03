<?php

namespace Rakhasa\Lararytr\Exceptions;

use Exception;

class RytrRequestException extends Exception
{
    /**
     * Construct
     *
     * @param integer $statusCode
     */
    public function __construct(int $statusCode)
    {
        parent::__construct('Error Processing Request', $statusCode);
    }
}
