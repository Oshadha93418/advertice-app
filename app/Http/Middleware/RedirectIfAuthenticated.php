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
        $user =Auth::user();
        echo "<script type='text/javascript'>alert(".$user.")</script>";
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->user_role == 'admin') {
                return redirect('/register');
            }
            return redirect('/home');
        }

        return $next($request);
    }
}
