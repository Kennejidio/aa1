<?php

namespace App\Http\Controllers;
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
        return view('faculty.dashboard')->with(compact('user'));
    }
}
