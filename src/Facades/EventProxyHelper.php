<?php

namespace Jmadsm\EventProxyHelper\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jmadsm\EventProxyHelper\EventProxyHelper
 */
class EventProxyHelper extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Jmadsm\EventProxyHelper\EventProxyHelper::class;
    }
}
