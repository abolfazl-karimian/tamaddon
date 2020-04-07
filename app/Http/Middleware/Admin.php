<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
        if (Auth::check() && Auth::user()->is_admin && Auth::user()->email == 'bahmani@gmail.com') {
            return $next($request);
        } else {
            return redirect()->route('admin.login.showLoginForm');
        }
    }
}
