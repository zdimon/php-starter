<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class GlobalMiddlewareConfig
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
        $users = DB::select('select * from USERS');

        view()->share('myusers', $users);
        return $next($request);
    }
}
