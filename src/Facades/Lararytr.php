<?php

namespace Kastanaz\Lararytr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kastanaz\Lararytr\Lararytr
 */
class Lararytr extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Kastanaz\Lararytr\Lararytr::class;
    }
}
