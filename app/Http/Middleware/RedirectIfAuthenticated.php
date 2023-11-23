<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $role = Auth::user()->role;

                switch ($role) {
                    case 'Admin':
                        $id = Auth::user()->id;
                        return '/staff/' . $id . '/dashboard';
                        break;
                    case 'staff':
                        $id = Auth::user()->id;
                        return '/staff/' . $id . '/dashboard';
                        break;
                    case 'faculty':
                        $id = Auth::user()->id;
                        return '/faculty/' . $id . '/dashboard';
                        break;
                    case 'student':
                        $id = Auth::user()->id;
                        return '/students/' . $id . '/dashboard';
                        break;

                    default:
                        return redirect('/home');
                        break;
                }
            }
        }

        return $next($request);
    }
}
