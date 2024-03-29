<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Closure;

class PatientMiddleware
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
        if(Auth::User()->usertype == 'user')
        {
            return $next($request);
        }
        else
        {
            return redirect('/home')->with('status','You are not allowed to Patient Dashboard');
        }
    }
}
