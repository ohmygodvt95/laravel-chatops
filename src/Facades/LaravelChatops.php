<?php

namespace Runsystemjsc\LaravelChatops\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Runsystemjsc\LaravelChatops\LaravelChatops
 */
class LaravelChatops extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-chatops';
    }
}
