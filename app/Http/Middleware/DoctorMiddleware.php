<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class DoctorMiddleware
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
        if(Auth::User()->usertype == 'doctor')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','You are not allowed to Doctor Dashboard');
        }
    }
}
