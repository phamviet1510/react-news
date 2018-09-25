<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminAuthenticate
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
            } else {
                //return response('Unauthorized.', 403);
                return redirect('/admin/login');
            }
        }

        if ($user = Auth::guard($guard)->user()) {
            if (!$user->isAccessAdmin()) {
                return response('Unauthorized.', 401);
            }else{
                return response('Unauthorized.', 403);
            }
        }

        return $next($request);
    }
}
