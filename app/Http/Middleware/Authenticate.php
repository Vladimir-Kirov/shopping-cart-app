<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

class Authenticate 
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
		if (Auth::guard($guard)->guest()) {
			if ($request->ajax() || $request->wantsJson()) {
				return response('Unauthorized.', 401);
			} else { // I want to store the URL the user tried to access previously to signing in 
				Session::put('oldUrl', $request->url());
				return redirect()->route('user.signin'); // redirect to sign-in page, if the user is not logged in
			}
		}
		return $next($request);
	}
}