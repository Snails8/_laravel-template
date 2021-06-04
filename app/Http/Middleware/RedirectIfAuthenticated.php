<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * 認証済みの場合、どこにリダイレクトを送るかの処理
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guards = null)
    {
        // URL が /user/1/edit => segment(3)   "edit"
        $prefix = $request->segment(1);
        $redirectTo = '/';

        if ($prefix == 'admin') {
            $guard = 'admin';
            $redirectTo = '/admin/home';
        } else {
            $guard = 'member';
            $redirectTo = '/';
        }

        if (Auth::guard($guard)->check()) {
            return redirect($redirectTo);
        }

//        default
//        $guards = empty($guards) ? [null] : $guards;
//
//        foreach ($guards as $guard) {
//            if (Auth::guard($guard)->check()) {
//                return redirect(RouteServiceProvider::HOME);
//            }
//        }

        return $next($request);
    }
}
