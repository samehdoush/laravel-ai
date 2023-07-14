<?php

namespace LaravelAi\LaravelAi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelAi\LaravelAi\LaravelAi
 */
class LaravelAi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaravelAi\LaravelAi\LaravelAi::class;
    }
}
