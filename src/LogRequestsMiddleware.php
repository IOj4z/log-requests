<?php

namespace ioj4z\LogRequestsMiddleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequestsMiddleware
{
    public function handle($request, Closure $next)
    {
        Log::info('Request:', [
            'method' => $request->getMethod(),
            'path' => $request->getPathInfo(),
            'query_params' => $request->query->all(),
            'request_params' => $request->request->all(),
            'ip' => $request->ip(),
        ]);

        return $next($request);
    }
}
