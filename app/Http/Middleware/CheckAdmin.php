<?php

namespace App\Http\Middleware;

use Closure;
use Alert;



class CheckAdmin
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
        if ($request->user()->role != 1) {
            Alert::warning('Warning Title', 'Warning Message')->persistent('Close');;
            return redirect('/') ;
        }
        return $next($request);
    }
}
