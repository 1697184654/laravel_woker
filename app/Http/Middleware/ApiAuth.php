<?php

namespace App\Http\Middleware;

use App\Services\AuthService;
use Closure;

class ApiAuth
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
        if ( !AuthService::isAuthenticated($request) )
        {
            return response()->json([
                'code' => '9000',
                'msg'  => '请登陆！',
                'data' => []
            ]);
        }
        return $next($request);
    }
}
