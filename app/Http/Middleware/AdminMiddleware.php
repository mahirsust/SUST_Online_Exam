<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        if(Auth::user()==null)
        {
            return redirect('/')->with('message', 'Apni ekta faul lok.');
        }
		else if(Auth::user()->user_category!='admin')
        {            
            return redirect('/')->with('message', 'Apni ekta faul lok.');
        }
        return $next($request);
    }
}
