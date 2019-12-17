<?php

namespace App\Http\Middleware;

use Closure;

class AgeMiddlware
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
        if($request->age <=200){

            ## this is the route in the middleware
            return redirect('home');
        }


        return $next($request);
    }
}
