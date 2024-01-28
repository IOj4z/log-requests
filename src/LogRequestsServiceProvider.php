<?php

namespace ioj4z\LogRequestsMiddleware;

use Closure;
use Illuminate\Support\ServiceProvider;
use ioj4z\LogRequestsMiddleware\LogRequestsMiddleware;

class LogRequestsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['router']->middlewareGroup('log.requests', [LogRequestsMiddleware::class]);
    }
}
