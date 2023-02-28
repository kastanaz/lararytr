<?php

namespace Rakhasa\Lararytr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Rakhasa\Lararytr\Lararytr
 */
class Lararytr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Rakhasa\Lararytr\Lararytr::class;
    }
}
