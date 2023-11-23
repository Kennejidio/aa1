<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FacultyController extends Controller
{
    public function dashboard (Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        if(!$user->hasRole('faculty')){ abort(404);}
        if($user->id != Auth::user()->id) { abort( 401); }
        $faculty = Staff::where("user_id", "=", Auth::user()->id)->first();
        return view('faculty.dashboard')->with(compact('faculty'));
    }

    public function students (Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        if(!$user->hasRole('faculty')){ abort(404);}
        if($user->id != Auth::user()->id) { abort( 401); }
        $faculty = Staff::where("user_id", "=", Auth::user()->id)->first();
        return view('faculty.students')->with(compact('faculty'));
    }

    public function class (Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        if(!$user->hasRole('faculty')){ abort(404);}
        if($user->id != Auth::user()->id) { abort( 401); }
        return view('faculty.class')->with(compact('user'));
    }
}
