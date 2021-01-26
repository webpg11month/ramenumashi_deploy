<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Closure;

class ShopLoginCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'shop')
    {
        
        if (!Auth::guard($guard)->check()) {
            Log::info('test2');
               //return redirect('/message/resultshoplogin');
               return $next($request);
        }
        Log::info('test1');
        return $next($request);
    }
}
