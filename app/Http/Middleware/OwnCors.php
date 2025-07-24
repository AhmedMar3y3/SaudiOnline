<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OwnCors
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

    $response->headers->set('Access-Control-Allow-Origin','http://localhost:3000');

    $headers = [
        'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Headers' => 'ngrok-skip-browser-warning,Content-Type, X-Auth-Token, Origin, Authorization,lang, Accept, Referer'
    ];

    if ($request->getMethod() == "OPTIONS") {
        $response->headers->add($headers);
        return $response->setStatusCode(200)->setContent('OK');
    }

    $response->headers->add($headers);
    return $response;
    }
}