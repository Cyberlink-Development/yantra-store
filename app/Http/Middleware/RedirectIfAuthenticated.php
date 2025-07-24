<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->verified == '1' && Auth::user()->roles == 'user') {
                return redirect()->route('index')->with('success', 'Logged in');
            }
            if (Auth::user()->verified == '1' && Auth::user()->roles == 'admin')  {
                return redirect()->route('dashboard')->with('success', 'Welcome to Dashboard');
            }
            if (Auth::user()->verified == '1' && Auth::user()->roles == 'wholeseller')  {
                return redirect()->route('index')->with('success', 'You are logged in as wholeseller');
            }
            if (Auth::user()->verified == '0') {
                Auth::logout();
                return back()->with('error', 'Please verify first');
            }
            //return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
