<?php

namespace App\Http\Middleware;



use App\LibraryFunctions\VisitorLogRegisterFunction;
use Closure;
use Illuminate\Http\Request;
use Carbon;
use DB;


use Illuminate\Support\Facades\Log;



class VisitorRegisterMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $visitor = new VisitorLogRegisterFunction();
        $visitor->registerVisitoreAccess($request);
        $message = "user register success";
        return $next($request);
    }
}
