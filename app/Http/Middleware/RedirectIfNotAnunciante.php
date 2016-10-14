<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class RedirectIfNotAnunciante
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */

	public function handle($request, Closure $next, $guard = 'anunciante')
	{
		var_dump(Auth::guard($guard)->check());
		exit();
	    if (!Auth::guard($guard)->check()) {
	        return redirect('/anunc');
	    }

	    return $next($request);
	}
}
