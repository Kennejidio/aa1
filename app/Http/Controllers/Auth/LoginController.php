<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        $role = "";
        if (Auth::user()->hasRole(["student"])) {
            $role = "student";
        } else if (Auth::user()->hasRole(["faculty"])) {
            $role = "faculty";
        } else if (Auth::user()->hasRole(["staff"])) {
            $role = "staff";
        } else if (Auth::user()->hasRole(["Admin"])) {
            $role = "Admin";
        }
        // dd($role);
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
                return '/home';
                break;
        }
    }
}
