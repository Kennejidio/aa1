<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class StaffController extends Controller
{
    public function dashboard (Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        // if($user->hasRole('student')){ abort(404);}
        if($user->hasRole('Admin') | $user->hasRole('staff'))
        {

        }else{
            abort(404);
        }
        if($user->id != Auth::user()->id) { abort( 401); }
        return view('staff.dashboard')->with(compact('user'));
    }
}
