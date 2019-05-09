<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'admin':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('admin.dashboard');
                }
                break;

            case 'studentParent':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('studentParent.dashboard');
                }
                break;

            case 'vanOwner':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('vanOwner.dashboard');
                }
                break;
                
            case 'vanDriver':
                if(Auth::guard($guard)->check()){
                    return redirect()->route('vanDriver.dashboard');
                }
                break;            
            
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                 }
                break;
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        return $next($request);
    }
}
