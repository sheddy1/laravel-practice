<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
        if(!session()->has('LoggedUser') && ($request->path() !='login1' && $request->path() !='register1')){
            return redirect('login1')->with('fail',"you must be logged in");
        }

        if(session()->has('loggeduser') && ($request->path() == 'login1' || $request->path() == 'register1')){
            return back();
        })
    }
}
