<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Redirect;

class Preventback
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $headers = [
            'Access-Control-Allow-Origin'      => '*',
            'Access-Control-Allow-Methods'     => 'POST, GET, OPTIONS',
            'Access-Control-Allow-Credentials' => 'true',
            'Access-Control-Max-Age'           => '86400',
            'Access-Control-Allow-Headers'     => 'Content-Type, Authorization, X-Requested-With',
            'Cache-Control'                     => 'nocache, no-store, max-age=0, must-revalidate'
        ];

        if ($request->isMethod('OPTIONS')) {
            return response()->json('{"method":"OPTIONS"}', 200, $headers);
        }

        $response = $next($request);
        foreach($headers as $key => $value) {
            $response->headers->set($key, $value);
        }

        return $response;

//
//        $response = $next($request);
//        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
//            ->header('Access-Control-Allow-Origin', '*')
//            ->header('Pragma','no-cache')
//            ->header('Expires','Fri, 01 jan 1990 00:00:00 GMT');

    }
}
